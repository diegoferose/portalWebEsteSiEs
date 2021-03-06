<?php

/**
 * Description of usuarioTable
 *
 * @author Cristian David
 */
use portalWebBuga\model\base\usuarioBaseTable;

class usuarioTable extends usuarioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  usu_id AS id , usu_usuario AS usuario , usu_password AS password ,'
            . ' usu_activado AS activado , rol_id AS rol_id ,'
            . 'usu_created_at AS created_at , usu_update_at AS update_at ,'
            . 'usu_delete_at AS delete_at '
            . 'FROM bdp_usuario'
            . 'WHERE usu_deleted_at IS NULL  '
            . 'ORDER BY created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
  public function getById($id){
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT  usu_id AS id , usu_usuario AS usuario , usu_password AS password ,'
            . ' usu_activado AS activado , rol_id AS rol_id ,'
            . 'usu_created_at AS created_at , usu_update_at AS update_at ,'
            . 'usu_delete_at AS delete_at '
            . 'FROM bdp_usuario'
            . 'WHERE usu_deleted_at IS NULL  '
            . 'AND usu_id = :id';
    $params = array(
        ':id' => $id
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }
  
   public function save() {
     $conn = $this->getConnection($this->config);
    $sql = 'INSER INTO bdp_usuario'
            . '(usu_usuario, usu_password,usu_activado,rol_id)'
            . 'VALUES (:id,:usuario,:password,:activado,:rol_id)';
    $params = array(
        ':usuario'=>  $this->getUsuario(),
        ':password' => $this->getPassword(),
        ':activado' => $this->getActivado(),
        ':rol_id' => $this->getRolId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
   }
   
   public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bdp_usuario SET usu_usuario = :usuario, usu_password = :password,'
            . 'usu_activado = :activado, rol_id =:rol_id'
            . 'where usu_id = :id';
    $params = array(
        ':usuario' => $this->getUsuario(),
        ':password' => $this->getPassword(),
        ':activado' => $this->getActivado(),
        ':rol_id' => $this->getRolId(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }
  
    public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bdp_usuario SET usu_deleted_at = now() WHERE usu_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bdp_usuario WHERE usu_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }


}
