<?php
class Products{
    // connection
    private $conn;

    // constructor
    public function __construct($conn){
        $this->conn = $conn;
    }

    // get all active item list 
    function getActiveItemList(){
        $sql = "SELECT item_list.ITEM_LIST_ID,item_list.ITEM_IMAGE,item_list.ITEM_NAME,parent_group.PARENT_GROUP_NAME,material_group.MATERIAL_GROUP_NAME FROM  item_list LEFT JOIN parent_group ON  parent_group.PARENT_GROUP_ID = item_list.PARENT_GROUP_ID LEFT JOIN material_group ON material_group.MATERIAL_GROUP_ID = item_list.PARENT_GROUP_ID  WHERE  item_list.ITEM_STATUS = 'ACTIVE'";
        $result = $this->conn->query($sql);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }


     // get all InActive item list 
     function getInActiveItemList(){
        $sql = "SELECT item_list.ITEM_LIST_ID,item_list.ITEM_NAME,parent_group.PARENT_GROUP_NAME,material_group.MATERIAL_GROUP_NAME FROM  item_list LEFT JOIN parent_group ON  parent_group.PARENT_GROUP_ID = item_list.PARENT_GROUP_ID LEFT JOIN material_group ON material_group.MATERIAL_GROUP_ID = item_list.PARENT_GROUP_ID  WHERE  item_list.ITEM_STATUS = 'InActive'";

        $result = $this->conn->query($sql);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }


    // getActiveMaterialGroup
    function getActiveMaterialGroup(){
        $sql ="SELECT MATERIAL_GROUP_ID,MATERIAL_GROUP_NAME FROM material_group WHERE MATERIAL_GROUP_STATUS ='Active'";        
        $result = $this->conn->query($sql);
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
}

?>