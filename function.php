<?php
function crud()
{
    insertT();
    deleteT();
    editT();
}
function viewCompletedTask()
{
    $view = new view();
    $view->viewCompletedData();

}
function viewTask()
{
    $view = new view();
    $view->viewData();
 
}


function insertT()
{
    if(!empty($_GET['task']))
{
   $insert = new insert($_GET['task']); 
   if($insert->insertTask())
   {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Task Created Successfully!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
   }
   else
   {
       echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Task Creation Error!
            </div>
            </div>';
   }
}
}
function deleteT()
{
    if(!empty($_GET['delete']))
{
   $delete = new delete($_GET['delete']); 
   if($delete->deleteTask())
   {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Task Deleted Successfully!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
   }
   else
   {
       echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Task Deletion Error!
            </div>
            </div>';
   }
}
}
function editT()
{
    if(!empty($_GET['edit']))
{
   $edit = new edit($_GET['edit']); 
   if($edit->editTask())
   {
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Task Completed Successfully!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
   }
   else
   {
       echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            Task Deletion Error!
            </div>
            </div>';
   }
}

}
?>