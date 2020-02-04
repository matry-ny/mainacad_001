<?php

class ApiOutput extends Output
{
    public function render(array $data)
    {
        echo json_encode($data);
    }
}