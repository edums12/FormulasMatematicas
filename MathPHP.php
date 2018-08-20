<?php

class MathPHP 
{

    public function fibonacci($number = null)
    {
        $validate = $this->validate($number);

        if($validate->success)
        {
            if ($number == 1 || $number == 2)
                return 1;
            else
                return $this->fibonacci($number - 1) + $this->fibonacci($number - 2);
        }
        else
        {
            return $validate->message;
        }
       
    }

    public function fatorial($number = null)
    {       
        $validate = $this->validate($number);

        if($validate->success)
        {
            if ($number == 0)
                return 1;
            else
                return $number * $this->fatorial($number-1);
        }
        else
        {
            return $validate->message;
        }
    }

    public function kesimoPar($number = null)
    {
        $validate = $this->validate($number);

        if($validate->success)
        {
            if ($number == 1)
                return 0;
            else
                return ($this->kesimoPar($number - 1) + 2);
        }
        else
        {
            return $validate->message;
        }
    }

    public function kesimoPot($number = null)
    {
        $validate = $this->validate($number);

        if($validate->success)
        {
            if($number == 0)
                return 1;
            else
                return (2 * $this->kesimoPot($number - 1));
        }
        else
        {
            return $validate->message;
        }
    }

    public function ackermann($numberX = null, $numberY = null)
    {
        $validateNumberX = $this->validate($numberX);
        $validateNumberY = $this->validate($numberY);

        if($validateNumberX->success && $validateNumberY->success)
        {
            if( $numberX == 0 )
                return $numberY + 1;
            else if( $numberY == 0 )
                return $this->ackermann($numberX - 1, 1);
            else
                return $this->ackermann($numberX - 1, $this->ackermann($numberX, $numberY-1));
        }
        else
        {
            if ( !$validateNumberX->success )
                return '1º param. - ' . $validateNumberX->message;
            else
                return '2º param. - ' . $validateNumberY->message;
        }
    }



    private function validate($number = null)
    {
        $res = new StdClass();
        $res->success = false;
        $res->message = null;

        try
        {
            if( is_null($number) )
                throw new Exception("O valor passado não pode ser nulo");

            if ( !is_int($number) )
                throw new Exception("O valor passado deve ser um número!");

            $res->success = true;
            return $res;

        }
        catch (Exception $execption)
        {
            $res->success = false;
            $res->message = $execption->getMessage();
            return $res;
        }
    }
}