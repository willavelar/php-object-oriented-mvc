<?php

use App\Libraries\Model;

class Exemple extends Model
{
  protected string $table = 'Exemplo';

  public function getAll() : array
  {
      $this->db->query('SELECT * FROM'.$this->table);

      return $this->db->resultSet();
  }
}