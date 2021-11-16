<?php

class view extends config
{
    
    public function viewData()
    {
     
        
        
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

       

        
                  foreach ($result as $data)
                  {
                     
                    echo "<li class=\"list-group-item\">";
                    echo $data['task'];
                    echo "<a href='index.php?delete=".$data['id']."'><button type=\"submit\" class=\"btn btn-light fa fa-trash-o float-right\" ></button></a>";
              
                    echo "<a href='index.php?edit=".$data['id']."'><button type=\"submit\" class=\"btn btn-light fa fa-check float-right\" ></button></a>";
                   
                   

                   
                                  
                          
                  }
           
          
          
           
                   
          
    }
    public function viewCompletedData()
    {
        $con = $this->con();
        $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
        $data = $con->prepare($sql);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
      
                  foreach ($result as $data)
                  {
                     
                
                           echo'<li class="list-group-item">';
                           echo $data['task'];
                        
                           
                                  
                           echo '</li>';
                         
                        
                  }
                
    }
}



?>