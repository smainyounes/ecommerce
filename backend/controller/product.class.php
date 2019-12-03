<?php 

	/**
	 * all products related methods are here
	 */

	class controller_product{
		private $db;

		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from product controller <br>";
		}

		/*
		 * getter methods 
		 */
		public function getallprod()
		{
			$sql = "SELECT *
						FROM products LEFT JOIN images
						ON products.id_prod = images.id_product
						WHERE NOT EXISTS(
						    SELECT * 
						    FROM images as T2BIS -- just an alias table
						    WHERE T2BIS.id_product = products.id_prod -- usual join
						    AND images.id_img > T2BIS.id_img -- change operator to take the last instead of the first
						) ORDER BY products.id_prod DESC";
			$this->db->query($sql);
			return $this->db->resultSet();
		}

		public function getbycateg($id_categ)
		{
			$sql = "SELECT *
						FROM products LEFT JOIN images
						ON products.id_prod = images.id_product
						WHERE id_category = :id
						AND NOT EXISTS(
						    SELECT * 
						    FROM images as T2BIS -- just an alias table
						    WHERE T2BIS.id_product = products.id_prod -- usual join
						    AND images.id_img > T2BIS.id_img -- change operator to take the last instead of the first
						) ORDER BY products.id_prod DESC";
			$this->db->query($sql);
			$this->db->bind(":id", strip_tags($id_categ));
			return $this->db->resultSet();
		}

		public function getsingle($id_prod)
		{
			$this->db->query("SELECT * FROM products WHERE id_prod = :id");
			$this->db->bind(":id",strip_tags($id_prod));

			try {
				return $this->db->single();
			} catch (Exception $e) {
				return NULL;
			}
		}

		public function getimages($id_prod)
		{
			$this->db->query("SELECT * FROM images WHERE id_product = :id");
			$this->db->bind(":id",strip_tags($id_prod));

			try {
				return $this->db->resultSet();
			} catch (Exception $e) {
				return NULL;
			}

		}

		/*
		 * setters methods 
		 */

		public function insert()
		{
			// inserting product infos

			$this->db->query("INSERT INTO products(id_category, name, description, price) VALUES(:categ, :name, :descr, :price)");
			$this->db->bind(":categ", strip_tags($_POST['categ']));
			$this->db->bind(":name", strip_tags($_POST['nomprod']));
			$this->db->bind(":descr", strip_tags($_POST['descprod']));
			$this->db->bind(":price", strip_tags($_POST['price']));

			try {
				$this->db->execute();
			} catch (Exception $e) {
				echo $e;
				return false;
			}

			// inserting images
			
			$idprod = $this->db->LastId();
			
			// image mime to be checked 
			$imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
			    image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_BMP));
			
			$FOLDER = "../img/exemples/";
			$myfile = $_FILES["imgprod"];
			$keepName = false; // change this for file name.
			for ($i = 0; $i < count($myfile["name"]); $i++) {
			    if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
			        // file is ok
			        echo "file is ok";
			        if (in_array($myfile["type"][$i], $imagetype)) {
			            //Set file name
			            if($keepName) {
			                $file_name =  $myfile["name"][$i];
			            } else {
			                // get extention and set unique name
			                $file_extention = @strtolower(@end(@explode(".", $myfile["name"][$i])));
			                $file_name = date("Ymd") . '_' . rand(10000, 990000) . '.' . $file_extention;
			            }
			            if (move_uploaded_file($myfile["tmp_name"][$i], $FOLDER . $file_name)) {
			            	// file moved inserting into the database
			                $this->db->query("INSERT INTO images(id_product, link) VALUES(:id, :link)");
			                $this->db->bind(":id", $idprod);
			                $this->db->bind(":link", $file_name);
			                try {
			                	$this->db->execute();
			                } catch (Exception $e) {
			                	echo $e;
			                }
			            } else {
			                echo "file not moved";
			            }
			        } else {
			            echo "invalid file type";
			        }
			    }
			}		

			return true;

		}

		public function delete($id_prod)
		{
			# code...
		}

		public function edit($id_prod)
		{
			# code...
		}

	}


 ?>