<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bootstrap Project Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<style>
    body {
        background: #eef3f8;
    }
    .task-box:hover {
        background: #f7faff;
        transition: 0.2s;
    }
</style>
</head>
<body class="d-flex justify-content-center mt-5">

<div class="card shadow-lg" style="width: 80%; height:800px; border-radius: 12px;">

    <div class="card-header bg-primary text-white fw-bold fs-4 d-flex align-items-center gap-2">
        📋 Project Dashboard
    </div>

    <div class="card-body">
        @foreach ($tasks as $task)
        <div class="d-flex align-items-center gap-3 p-2 task-box">
            
            <input class="form-check-input" type="checkbox" />
            
                <p class="m-0 fw-semibold flex-grow-1">
                    {{ $task->task_name }}
                </p>
            
            <button class="btn btn-sm btn-link text-decoration-none text-danger fs-4 p-0"><span style="color: black;">&times;</span></button>
            
        </div>
        @endforeach
    </div>
    

    <div class="card-footer text-center text-secondary">
        Click the checkbox to mark as completed.
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
