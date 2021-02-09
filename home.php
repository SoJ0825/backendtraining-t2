<?php
require_once("./templates/header.php");
?>

<body class="bg-light">
    <!-- 標題開始 -->
    <div class="container-fluid  border-bottom bg-dark text-white">
        <div class="p-2 my-0 text-center">
            <h2 class="m-0">
                Tasks List
            </h2>
        </div>
    </div>
    <!-- 標題結束 -->

    <!-- 新增區開始 -->
    <div class="container col-md-10 p-0 bg-white">
        <div class="p-1 my-2 border">
            <h3 class="m-0 py-1 ">
                New Task
            </h3>
            <div class="panel-body ">
                <!-- New Task Form -->
                <form action="http://localhost/backendtraining-t2/process/submit" method="post" class="form-horizontal">
                    <!-- Task Name -->
                    <div class="form-group p-2">
                        <div class="">
                            <input type="text" name="task" id="task" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="form-group">
                        <div class="d-flex justify-content-end mr-2">
                            <button type="submit" name="submit" class="btn btn-primary ">
                                <i class="fa fa-btn fa-plus"></i>Save
                            </button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <!-- 新增區結束 -->

    <!-- Current Tasks -->
    <div class="container col-md-10 p-0 bg-white">
        <div class="container border-bottom px-1 col-md-12">
            <h3 class="m-0 py-1">Current Tasks</h3>
        </div>
        <div class="container border-bottom col-md-12">
            <h4 class="m-0 py-1">Task</h4>
        </div>
        <div class="container col-md-12">

            <?php include "./templates/tasks.php" ?>

        </div>
    </div>


    <?php
    require_once("./templates/footer.php");
    ?>