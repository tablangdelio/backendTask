<?php

    header('Content-Type: application/json');

    class ApiUtils {

        protected $data = [];

        public function __construct(array $data) {
            $this->data = $data;
        }
                
        public function getData() {
           $arrData = [];
           foreach( $this->data as $key => $value) {
                $arrData[] = [
                    'id' => $value->id,
                    'firstName' => $value->first_name,
                    'lastName' => $value->last_name,
                    'email'=> $value->email,
                    'gender' => $value->gender,
                    'ip_address' => $value->ip_address,
                ];
             }
             return $arrData;
        } 
        
    }
    
    $data  = json_decode(file_get_contents('MOCK_DATA.json'), false);
    $objData = new ApiUtils($data);
    print_r($objData->getData());
  
?>