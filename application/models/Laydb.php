<?php
	class Laydb extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllProducts(){
		    $this->db->where('ishow', 1);
			$query = $this->db->get("product");
			return $query->result_array();
		}

//		----------------------

        public function getAllPart1(){
            $this->db->group_by('grID');
            $query = $this->db->get("toeicpart1");
            return $query->result_array();
        }

        public function getPart1qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart1");
            return $query->result_array();
        }

        public function getAllPart2(){
            $query = $this->db->get("toeicpart2");
            return $query->result_array();
        }

        public function getAllPart5(){
            $query = $this->db->get("toeicpart5");
            return $query->result_array();
        }

        public function getPart5qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart5");
            return $query->result_array();
        }

        public function updatePart5qestion($qesID, $gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd,$gtrueAns, $gExplain, $ishow){
            $this->db->set('quest', $gquest);
            $this->db->set('ansa', $gvAnsa);
            $this->db->set('ansb', $gvAnsb);
            $this->db->set('ansc', $gvAnsc);
            $this->db->set('ansd', $gvAnsd);
            $this->db->set('trueans', $gtrueAns);
            $this->db->set('explainans', $gExplain);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $qesID);
            $this->db->update('toeicpart5');
        }

        public function insertPart5qestion($gquest, $gvAnsa, $gvAnsb, $gvAnsc, $gvAnsd,$gtrueAns, $gExplain, $ishow){
            $this->db->set('quest', $gquest);
            $this->db->set('ansa', $gvAnsa);
            $this->db->set('ansb', $gvAnsb);
            $this->db->set('ansc', $gvAnsc);
            $this->db->set('ansd', $gvAnsd);
            $this->db->set('trueans', $gtrueAns);
            $this->db->set('explainans', $gExplain);
            $this->db->set('ishow', $ishow);
            $this->db->insert('toeicpart5');
        }

        public function deletePart5Quest($qesID){
            $this->db->where('ID', $qesID);
            $this->db->delete('toeicpart5');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function getAllPart7(){
            $query = $this->db->get("toeicpart7");
            return $query->result_array();
        }

        public function getPart7qestion($qesID){
            $this->db->where('ID', $qesID);
            $query = $this->db->get("toeicpart7");
            return $query->row_array();
        }








//      ------------------------

        public function getNumberProducts(){
            $this->db->where('ishow', 1);
            $this->db->limit(8);
            $query = $this->db->get("product");
            return $query->result_array();
        }

        public function getAllProductsAdmin(){
            $query = $this->db->get("product");
            return $query->result_array();
        }

		public function getProductDetail($productID){
			$this->db->where('ID',$productID);
			$query = $this->db->get('product');

			return $query->result_array();
		}

		public function getProductTitle($productID){
			$this->db->select('longName');
			$this->db->where('ID',$productID);
			$query = $this->db->get('product');

			return $query->row_array();
		}

		public function updateProduct($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
                                      $ishome, $orPrice, $salePrice, $category){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $reLongDetail);
            $this->db->set('ishow', $ishow);
            $this->db->set('ishome', $ishome);
            $this->db->set('orPrice', $orPrice);
            $this->db->set('salePrice', $salePrice);
            $this->db->set('category', $category);

            $this->db->where('ID', $productID);



            $this->db->update('product');
            echo 'So dong update: '.$this->db->affected_rows();

        }

        public function insertProduct($shotName, $shotDetail, $imgThumbnail, $longName, $reLongDetail, $ishow,
                                      $ishome, $orPrice, $salePrice, $category){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $reLongDetail);
            $this->db->set('ishow', $ishow);
            $this->db->set('ishome', $ishome);
            $this->db->set('orPrice', $orPrice);
            $this->db->set('salePrice', $salePrice);
            $this->db->set('category', $category);

            $this->db->insert('product');

            if($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteProduct($productID){
            $this->db->where('ID', $productID);
            $this->db->delete('product');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function getAllBlogs(){
            $this->db->where('ishow', 1);
            $this->db->limit(8);
            $this->db->order_by("ID", "DESC");
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function get8Blogs(){
            $this->db->where('ishow', 1);
            $this->db->where('category !=', 0);
            $this->db->limit(8);
            $this->db->order_by("ID", "DESC");
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function getAllBlogsAdmin(){
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

		public function getBlogDetail($blogID){
			$this->db->where('ID',$blogID);
			$query = $this->db->get('blogs');

			return $query->result_array();
		}

		public function getBlogTitle($blogID){
			$this->db->select('longName');
			$this->db->where('ID',$blogID);
			$query = $this->db->get('blogs');

			return $query->row_array();
		}

        public function updateBlog($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $productID);

            $this->db->update('blogs');

            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function insertBlog($shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);

            $this->db->insert('blogs');

            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteBlog($productID){
            $this->db->where('ID', $productID);
            $this->db->delete('blogs');
            if ($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
        }

		public function getIntroduceDetail(){
			$this->db->select('longName,longDetail');
			$query = $this->db->get('introduce');

			return $query->result_array();
		}

        public function getIntroduceEdit(){
            $this->db->limit(1);
            $query = $this->db->get('introduce');

            return $query->result_array();
        }

        public function updateIntroduce($productID, $shotName, $shotDetail, $imgThumbnail, $longName, $longDetail, $ishow){
            $this->db->set('shotName', $shotName);
            $this->db->set('shotDetail', $shotDetail);
            $this->db->set('imgThumbnail', $imgThumbnail);
            $this->db->set('longName', $longName);
            $this->db->set('longDetail', $longDetail);
            $this->db->set('ishow', $ishow);
            $this->db->where('ID', $productID);

            $this->db->update('introduce');
        }

		public function getMaybeLike(){
			
			$query = $this->db->get('blogs', 5, rand(1,5));

			return $query->result_array();
		}

        public function get3sanpham($catalog){
            $this->db->where('ishow', 1);
            $this->db->where('ishome', 1);
            $this->db->where('category', $catalog);
            $this->db->limit(3);
            $query = $this->db->get("blogs");
            return $query->result_array();
        }

        public function saveOrder($cusName, $mobile, $adress, $productId, $total){
            $this->db->set('cusname', $cusName);
            $this->db->set('mobile', $mobile);
            $this->db->set('adress', $adress);
            $this->db->set('productid', $productId);
            $this->db->set('total', $total);

            $this->db->insert('order');
        }

        public function saveUpdateOrder($cusName, $mobile, $adress, $isshow, $note, $orderID){
            $this->db->set('cusname', $cusName);
            $this->db->set('mobile', $mobile);
            $this->db->set('adress', $adress);
            $this->db->set('status', $isshow);
            $this->db->set('note', $note);
            $this->db->where('ID', $orderID);

            $this->db->update('order');
        }

        public function getOrderList(){
            $this->db->select('order.*, order.id AS order_id, product.longName, product.salePrice, product.id AS product_id');
            $this->db->from('order');
            $this->db->join('product', 'product.ID = order.productid', 'left outer');
            $this->db->order_by("order.ID", "DESC");

            $query = $this->db->get();
            return $query->result_array();
        }

        public function getOrderDetail($orderId){
            $this->db->select('*');
            $this->db->from('order');
            $this->db->where('ID', $orderId);

            $query = $this->db->get();
            return $query->result_array();
        }
	}
?>