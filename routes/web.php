<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;

// Route Halaman Publik / Utama
Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [MahasiswaController::class, 'index']);
Route::get('/project', [ProjectController::class, 'index']);
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.detail');
Route::get('/about', function () {
    return view('page.about');
});

// Fungsi helper session untuk data projects
function getProjectsSession() {
    if (!session()->has('projects_data')) {
        session()->put('projects_data', [
            ['id' => 1, 'title' => 'Sistem ERP Tes', 'tech' => 'PHP, Laravel', 'description' => 'Sistem ERP untuk perusahaan manufaktur.', 'status' => 'active', 'image' => null],
            ['id' => 2, 'title' => 'Sistem HRIS', 'tech' => 'JavaScript, React', 'description' => 'Sistem HRIS untuk mengelola data karyawan.', 'status' => 'active', 'image' => null],
            ['id' => 3, 'title' => 'Sistem SCM', 'tech' => 'Python, Django', 'description' => 'Sistem SCM untuk mengelola rantai pasokan.', 'status' => 'active', 'image' => null],
        ]);
    }
    return session('projects_data');
}

// Route Panel Admin
Route::prefix('admin')->group(function(){
    // Dashboard Admin
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.home');

    // Data Project (Index)
    Route::get('/projects', function () {
        $projects = getProjectsSession();
        return view('admin.projects.index', compact('projects'));
    })->name('admin.projects.index');

    // Form Tambah Project
    Route::get('/projects/create', function () {
        return view('admin.projects.create');
    })->name('admin.projects.create');

    // Proses Simpan Project
    Route::post('/projects', function (Request $request) {
        $projects = getProjectsSession();
        $newId = count($projects) > 0 ? max(array_column($projects, 'id')) + 1 : 1;

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/projects'), $imageName);
        }

        $newProject = [
            'id' => $newId,
            'title' => $request->input('title'),
            'tech' => $request->input('tech'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'image' => $imageName,
        ];

        $projects[] = $newProject;
        session()->put('projects_data', $projects);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan!');
    })->name('admin.projects.store');

    // Form Edit Project
    Route::get('/projects/{id}/edit', function ($id) {
        $projects = getProjectsSession();
        $project = null;
        foreach ($projects as $p) {
            if ($p['id'] == $id) {
                $project = $p;
                break;
            }
        }
        if (!$project) {
            $project = ['id' => $id, 'title' => '', 'tech' => '', 'description' => '', 'status' => 'active', 'image' => null];
        }
        return view('admin.projects.edit', compact('project'));
    })->name('admin.projects.edit');

    // Proses Update Project
    Route::post('/projects/update/{id}', function (Request $request, $id) {
        $projects = getProjectsSession();
        foreach ($projects as &$p) {
            if ($p['id'] == $id) {
                $p['title'] = $request->input('title');
                $p['tech'] = $request->input('tech');
                $p['status'] = $request->input('status');
                $p['description'] = $request->input('description');
                
                if ($request->hasFile('image')) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('uploads/projects'), $imageName);
                    $p['image'] = $imageName;
                }
                break;
            }
        }
        session()->put('projects_data', $projects);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diperbarui!');
    })->name('admin.projects.update');

    // Proses Hapus Project
    Route::delete('/projects/{id}', function ($id) {
        $projects = getProjectsSession();
        $projects = array_values(array_filter($projects, function ($p) use ($id) {
            return $p['id'] != $id;
        }));
        session()->put('projects_data', $projects);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus!');
    })->name('admin.projects.destroy');
});

// Route Logout (Mengarahkan kembali ke halaman utama / beranda)
Route::get('/logout', function () {
    return redirect('/');
})->name('logout');