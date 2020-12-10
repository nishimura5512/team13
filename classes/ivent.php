<?php
    // スーパークラスであるDbDataを利用するため
    require_once __DIR__ . '/dbdata.php';

    // Productクラスの宣言
    class  Ivent  extends  DbData {
        // 選択されたジャンルの商品を取り出す
        public  function  NowIvent ( $now ) {
            $sql  =  "select  *  from  ivent  where  sdate  <=  ?  &&  edate >=  ?  order  by  edate  asc";
            $stmt = $this->query( $sql,  [$now, $now] );
            $items = $stmt->fetchAll( );
            return  $items;
        }

         public  function  AfterIvent ( $now ) {
            $sql  =  "select  *  from  ivent  where  sdate  >  ?  order  by  sdate  asc";
            $stmt = $this->query( $sql,  [$now] );
            $items = $stmt->fetchAll( );
            return  $items;
        }
    }
