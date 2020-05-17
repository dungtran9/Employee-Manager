<?php


class EmplayeeManager
{
protected $pathfile ;
public function __construct($pathfile)
{
    $this->pathfile=$pathfile;
}
public function getDataToFile(){
    $dataJson = file_get_contents($this->pathfile);
    return json_decode($dataJson,true);
}
public function saveDataToFile($array){
$dataJson = json_encode($array);
file_put_contents($this->pathfile,$dataJson);
}
public function add($employee){
    $data=$this->getDataToFile();
    $arr=[
        'id'=>$employee->getId(),
        'firstname'=>$employee->getFirstName(),
        'lastname'=>$employee->getLastName(),
        'dateofbirth'=>$employee->getDateOfBirth(),
        'address'=>$employee->getAddress(),
        'job'=>$employee->getJob(),
    ];
    array_push($data,$arr);
    $this->saveDataToFile($data);
}
public function getAll(){
    $data = $this->getDataToFile();
    $arr = [];
    foreach ($data as $item) {
        $employee = new Employee($item['id'], $item['firstName'], $item['lastName'],$item['dateOfBirth'],$item['address'],$item['job']);
        array_push($arr, $employee);
    }

    return $arr;
}
    public function delete($id) {
        $data = $this->getDataToFile();
        unset($data[$id]);
        $this->saveDataToFile($data);
    }
}