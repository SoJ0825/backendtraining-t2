<?php
$taskModel = new TaskModel();
if ($taskModel->read()) {
    foreach ($taskModel->read() as $taskData) {
        if ($taskData['completed'] == 0) {
            echo <<<EOT
            <div class="container row pr-0 border-bottom mb-2 mx-0 px-0 d-flex justify-content-center col-md-12">
                <div class="col-md-9 span_a"><span>{$taskData['task']}</span></div>
                <div class="col-md-3 p-1">
                    <div class="container-fluid p-0">                    
                        <a href="process.php?send=completed&id={$taskData['id']}" class='btn btn-success btn-block my-1'><i class="fa fa-btn fa-thumbs-o-up"></i>Completed</a>
                    </div>
                <div class="container-fluid d-flex justify-content-center p-0">
                        <a href="edit.php?id={$taskData['id']}" class='btn btn-primary btn-block my-1 mr-1'><i class="fa fa-btn fa-pencil"></i>Edit</a>
                        <a href="process.php?send=delete&id={$taskData['id']}" class='btn btn-danger btn-block my-1 ml-1'><i class="fa fa-btn fa-trash"></i>Delete</a>
                 </div>
                </div>
            </div>
            EOT;
        } else {
            echo <<<EOT
            <div class="container row pr-0 border-bottom mb-2 mx-0 px-0 d-flex justify-content-center col-md-12">
                <div class="col-md-9 span_a"><del>{$taskData['task']}</del></div>
                <div class="col-md-3 p-1">
                    <div class="container-fluid p-0">                    
                        <a class='btn btn-success btn-block my-1 text-white disabled'><i class="fa fa-btn fa-thumbs-o-up"></i>Completed</a>
                    </div>
                <div class="container-fluid d-flex justify-content-center p-0">
                        <a class='btn btn-primary btn-block my-1 mr-1 text-white disabled'><i class="fa fa-btn fa-pencil"></i>Edit</a>
                        <a href="process.php?send=delete&id={$taskData['id']}" class='btn btn-danger btn-block my-1 ml-1'><i class="fa fa-btn fa-trash"></i>Delete</a>
                    </div>
                </div>
            </div>
            EOT;
        }
    }
} else {
    echo <<<EOT
        <div class="d-flex justify-content-center my-5">
            <h4>目前這裡一片荒涼...</h4>
        </div>
    EOT;
}
