<?php
    // スーパークラスであるDbDataを利用するため
    require_once __DIR__ . '/dbdata.php';

    // Productクラスの宣言
    class  Item  extends  DbData {
        // 選択されたジャンルの商品を取り出す
        public  function  getItems ( $iventId ) {
            $sql  =  "select  *  from  items  where  iventId  =  ?";
            $stmt = $this->query( $sql,  [$iventId] );
            $items = $stmt->fetchAll( );
            return  $items;
        }

		 public function getItem($itemId){
            $sql = "select * from items where itemId = ?";
            $stmt = $this->query($sql, [$itemId]);
            $item = $stmt->fetch();
            return $item;
        }

		public function getUser($userId){
            $sql = "select * from users where userId = ?";
            $stmt = $this->query($sql, [$userId]);
            $user = $stmt->fetch();
            return $user;
        }
    }
