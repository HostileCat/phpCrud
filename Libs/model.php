<?php
    class Model{
        protected $id;
        protected $tabla;
        protected $db;

        public function __construct(
        $id,
        $tabla,
        PDO $connection) {
            
            $this->id = $id;
            $this->tabla = $tabla;
            $this->db = $connection;

        }

        public function getAll() {
            $stm = $this->db->prepare("select * from $this->tabla");

            $stm->execute();
            return $stm->fetchAll();
        }

        public function getById($id) {
            $stm = $this->db->prepare("select * from $this->tabla where id = :id");
            $stm->bindValue(':id', $id);
            $stm->execute();
            return $stm->fetch();
        }

        public function store($data) {
            // var_dump($data);

            $sql = "insert into {$this->tabla} (";
            foreach ($data as $key => $value) {
                $sql .= "{$key},";
            }
            // Eliminamos el ultimo caracter
            $sql = trim($sql, ",");
            $sql .= ") values (";
            
            foreach ($data as $key => $value) {
                $sql .= ":{$key},";
            }
            // Eliminamos el ultimo caracter
            $sql = trim($sql, ",");
            $sql .= ")";

            

            $stm = $this->db->prepare($sql);

            foreach ($data as $key => $value) {
                $stm->bindValue(":{$key}", $value);
                
            }
            $stm->execute();

        }

        public function update($id, $data) {
 
            $sql = "update {$this->tabla} set ";

            foreach ($data as $key => $value) {
                $sql .= "{$key} = :{$key}, ";
            }
            
            // Eliminamos el ultimo caracter
            $sql = trim($sql, ", ");
            $sql .= " where id = :id";

            echo ($sql);

            $stm = $this->db->prepare($sql);

            foreach ($data as $key => $value) {
                
                $stm->bindValue(":{$key}", $value);
                
            }
            $stm->bindValue(':id', $id);
            $stm->execute();
        }

        public function delete($id) {
            $stm = $this->db->prepare("delete from $this->tabla where id = :id");
            $stm->bindValue(':id', $id);
            $stm->execute();
        }
    }
?>