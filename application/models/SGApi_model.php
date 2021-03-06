<?php 
class SGApi_model extends CI_Model {
   public function __construct()
    {
       parent::__construct();
    }


 public function wheredetailmain($tablename,$where,$id)
  {
          $this->db->where($where,$id);
          $query=$this->db->get($tablename);
          return $query->row();
  }

public function validate($email,$password)
   {
        $this->db->where('email',$email);
        $this->db->where('pass',$password);
        // Run the query
        $query = $this->db->get('user');
        return $query->row();
    }
public function getCat($token){
    $this->db->select('*');
    $query=$this->db->get('category');
    return $query->result_array();
}
public function getService($token, $cat){
    $this->db->select('*');
    $this->db->where('c_id',$cat);
    $query=$this->db->get('services');
    return $query->result_array();
}
public function getOffers($token){
    $this->db->select('*');
    $query=$this->db->get('offers');
    return $query->result_array();
}
 public function insert($tablename,$data)
    {
              $insert = $this->db->insert($tablename,$data);
        if($insert)
    {
        return $this->db->insert_id();
    }
    else{
            return false;    
        }
    } 
public function inserttemp($tablename,$data,$col,$id)
       {
        $this->db->where($col,$id);
        $insert = $this->db->insert($tablename,$data);
        if($insert)
     {
         return $this->db->insert_id();
        }else{
            return false;    
        }
    } 

public function count_data($tablename,$where,$id,$where1,$id1){

 $this->db->where($where,$id);
 $this->db->where($where1,$id1);
    $query=$this->db->get($tablename);
    return $query->num_rows();
}
   public function count($where,$id,$first_date,$second_date)
        {
              $this->db->from('student_fees_detail p'); 
              $this->db->where('p.next_pay_date >=', $first_date);
              $this->db->where('p.next_pay_date  <=', $second_date);
              $this->db->where($where,$id);
              $this->db->where('status',1);
              return  $this->db->count_all_results();
            
        }
    public function wheredetail($tablename,$where,$id)

  {
     $this->db->where($where,$id);
    $query=$this->db->get($tablename);
    return $query->row();
  }
  
   public function wheredetail_all($tablename,$select,$where,$id)
  {
    $this->db->select($select);
  $this->db->where($where,$id);
    $query=$this->db->get($tablename);
    return $query->result();
  }

   public function Detail_select($tablename,$select)
  {
    $this->db->select($select);
    $query=$this->db->get($tablename);
    return $query->result_array();
  }
   public function wheredetail_all_dec($tablename,$select,$where,$id)
  {
    $this->db->select($select);
  $this->db->where($where,$id);
  $this->db->order_by('id', 'DESC');
    $query=$this->db->get($tablename);
    return $query->result();
  }
  public function wheredetailtemp($tablename,$where,$id)
  {
     $this->db->where($where,$id);
    $query=$this->db->get($tablename);
    return $query->result();
  }

  
    public function delete($tablename,$where,$services_id) 
      { 
                $this->db->where($where,$services_id);

         if ($this->db->delete($tablename))
     { 
            return true; 
         } 
      }
 public function delete2where($tablename,$where,$id,$where1,$id1) 
      { 
              $this->db->where($where,$id);
              $this->db->where($where1,$id1);
         if ($this->db->delete($tablename))
     { 
            return true; 
         } 
      }
public function wheredetail_all_dec5($tablename,$select,$where,$id)
  {
    $this->db->select($select);
    $this->db->where($where,$id);
    $this->db->group_by('vendor_id');// add group_by
    $this->db->order_by('id', 'DESC');
    $query=$this->db->get($tablename);
    return $query->result();
  }
  public function wheredetail_all_dec5sub($tablename,$select,$where,$id,$where1,$id1)
  {
    $this->db->select($select);
    $this->db->where($where,$id);
    $this->db->where($where1,$id1);
    $this->db->group_by('vendor_id');// add group_by
    $this->db->order_by('id', 'DESC');
    $query=$this->db->get($tablename);
    return $query->result();
  }
    public function wheredetail_senario_one($tablename,$select,$where,$id)
  {
    $this->db->select($select);
    $this->db->where($where,$id);
    $this->db->where('senario_status', 'Active');
   $this->db->order_by('senario_id', 'RANDOM');
    $this->db->limit(1);
    $query=$this->db->get($tablename);
    return $query->result();
  }
   public function wheredetail_gift_one($tablename,$select,$where,$id)
  {
    $this->db->select($select);
    $this->db->where($where,$id);
    $this->db->where('stock >=', 1);
   // $this->db->order_by('id', 'RANDOM');
    // $this->db->limit(1);
    $query=$this->db->get($tablename);
    return $query->result();
  }
 public function whereFileName($tablename,$col,$type)
  {
    $this->db->select($col);
  $this->db->where('support_type',$type);
  $this->db->where('status','Active');
    $query=$this->db->get($tablename);
    return $query->result();
  }

public function whereFileNameSelectedLimitRandom($tablename,$col,$col1,$id1)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
   
     $this->db->limit(4);
     // $this->db->order_by('rand()');
    $query=$this->db->get($tablename);
    return $query->result();
  }

  public function whereFileNameSelectedLimit($tablename,$col,$col1,$id1,$col2,$id2,$offset)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
     $this->db->where($col2,$id2);
     $this->db->limit(10,$offset);
    $query=$this->db->get($tablename);
    return $query->result();
  }

public function whereFileNameSelected($tablename,$col,$col1,$id1,$col2,$id2)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
     $this->db->where($col2,$id2);
    $query=$this->db->get($tablename);
    return $query->result();
  }
  public function whereFileNameSelected_desc($tablename,$col,$col1,$id1,$col2,$id2)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
     $this->db->where($col2,$id2);
     $this->db->order_by('id', 'DESC');
    $query=$this->db->get($tablename);
    return $query->result();
  }
  public function whereFileNameSelected_desc_one($tablename,$col,$col1,$id1,$col2,$id2)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
     $this->db->where($col2,$id2);
     $this->db->order_by('id', 'DESC');
     $this->db->limit(1);
    $query=$this->db->get($tablename);
    return $query->result();
  }

  public function where333FileNameSelected($tablename,$col,$col1,$id1,$col2,$id2,$col3,$id3)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
     $this->db->where($col2,$id2);
     $this->db->where($col3,$id3);
     // $this->db->order_by('id', 'DESC');
     // $this->db->limit(1);
    $query=$this->db->get($tablename);
    return $query->result();
  }
 //  **************** first  home page model ****************** 
 public function wherebyRatting()
  {
     $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.ratting', 'DESC');

      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyRattingLimit()
  {
     $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.ratting', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyLatestDate()
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.add_date', 'DESC');
      $query=$this->db->get();
    return $query->result();
  }
   public function wherebyLatestDateLimit()
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.add_date', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyPopular()
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
      $query=$this->db->get();
    return $query->result();
  }
   public function wherebyPopularLimit()
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

// ***************  offer according to category ******************

  public function wherebyRattingcat($cat_id)
  {
     $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id,o.category_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.ratting', 'DESC');

      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyRattingLimitcat($cat_id)
  {
     $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.ratting', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyLatestDatecat($cat_id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.add_date', 'DESC');
      $query=$this->db->get();
    return $query->result();
  }
   public function wherebyLatestDateLimitcat($cat_id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.add_date', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyPopularcat($cat_id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
      $query=$this->db->get();
    return $query->result();
  }
   public function wherebyPopularLimitcat($cat_id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyAllCat($cat_id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
      $query=$this->db->get();
    return $query->result();
  }

  public function wherebyAllSubCat($cat_id,$sub_cat)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
     $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
      $query=$this->db->get();
    return $query->result();
  }
  //  public function wherebyFeaturedLimit($tablename,$col,$col1,$id1)
  // {
  //   $this->db->select($col);
  //   $this->db->where($col1,$id1);
  //   $this->db->order_by('featured', 'DESC');
  //   $this->db->limit(4);
  //   $query=$this->db->get($tablename);
  //   return $query->result();
  // }
  public function whereNearby($lat11)
      {      
         $sql = $this->db->query($lat11);
        return $sql->result();
      }

   public function whereLikeSubcatName($cat_id,$keyword)
      {    

        // return $this->db->select('*')->from('vendor_offers')->where("`category_id` ='$cat_id'")->where("msub_cat_id LIKE '%$keyword%'")->get()->result();


    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where("o.sub_cat_name LIKE '%$keyword%'");
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
      $query=$this->db->get();
    return $query->result();
      }
   public function whereLikeAmenitiesName($cat_id,$keyword)
      {      

        // return $this->db->select('*')->from('vendor_offers')->where("`category_id` ='$cat_id'")->where("maminities_id LIKE '%$keyword%'")->get()->result();

         $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where("o.aminities LIKE '%$keyword%'");
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
    $this->db->order_by('o.popular', 'DESC');
      $query=$this->db->get();
    return $query->result();
      }
 public function wherecatName_Alfabet($cat_id)
      {    

        // return $this->db->select('*')->from('offers')->where("`category_id` ='$cat_id'")->order_by("heading", "asc")->get()->result();
        $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
      $this->db->order_by('o.offer_title', 'asc');
       $query=$this->db->get();
    return $query->result();
      }
      public function whereLikeSubcatName_Alfabet($cat_id,$keyword)
      {    

        // return $this->db->select('*')->from('offers')->where("`category_id` ='$cat_id'")->where("sub_cat_name LIKE '%$keyword%'")->order_by("heading", "asc")->get()->result();

         $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.category_id',$cat_id);
    $this->db->where("o.sub_cat_name LIKE '%$keyword%'");
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
      $this->db->order_by('o.offer_title', 'asc');
        $query=$this->db->get();
    return $query->result();
      }
    public function wherebySearch($keyword)
  {
     $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');
    $this->db->join('category c', 'c.id = o.category_id', 'left');
     $this->db->join('services s', 's.id = o.sub_cat_name', 'left');
    $this->db->where("s.name LIKE '%$keyword%' OR o.offer_title LIKE '%$keyword%'  OR v.name LIKE '%$keyword%' OR c.name LIKE '%$keyword%'");

    $this->db->limit(20);
    $query=$this->db->get();
    return $query->result();
  }

   public function offer_detail_vendor($id)
  {
    $this->db->select('o.id,o.offer_title,o.offer_detail,o.add_date,o.ratting,o.main_amount,o.saving_amount,v.store_name,v.featured_image,v.logo_image,o.vendor_id');
    $this->db->from('vendor_offers o');
    $this->db->join('vendor v', 'v.id = o.vendor_id', 'left');

    $this->db->where('o.id',$id);
    $this->db->where('o.status','Active');
    $this->db->where('o.stoke >',0);
      $query=$this->db->get();
    return $query->result();
  }
 public function updatewhere($tablename,$where,$id,$data)
  {
     $this->db->where($where,$id);
     $this->db->update($tablename,$data);
       if($this->db->affected_rows())
          return true;
           else
          return false;
           }

public function updatewhere_order($tablename,$where,$id,$where1,$id1,$where2,$id2,$data)
  {
     $this->db->where($where,$id);
     $this->db->where($where1,$id1);
     $this->db->where($where2,$id2);
     $this->db->update($tablename,$data);
       if($this->db->affected_rows())
          return true;
           else
          return false;
           }
  public function AvrageRatting($P_id)
        {
           $this->db->select('CAST(AVG(r.ratting) AS DECIMAL(10,2)) AS total_ratting');
           $this->db->from('offer_ratting_history r'); 
          $this->db->where('r.offer_id',$P_id);      
          $query = $this->db->get(); 
           return $query->result();
        }

public function AvrageRatting_vendor($P_id)
        {
           $this->db->select('CAST(AVG(r.ratting) AS DECIMAL(10,2)) AS total_ratting');
           $this->db->from('vendor_ratting r'); 
          $this->db->where('r.vendor_id',$P_id);      
          $query = $this->db->get(); 
           return $query->result();
        }
 function Offer_chk($date,$vendor_id){

   $this->db->select('o.id,o.offer_title,o.offer_detail,o.saving_amount,v.offer_type,v.setup_image AS offer_img,o.vendor_id,o.limit_per_user,o.valid_date');
    $this->db->from('vendor_offers o');
    $this->db->join('offer_setup v', 'v.setup_id = o.offer_type', 'left');

    $this->db->where('o.vendor_id',$vendor_id);
    $this->db->where('o.status','Active');
     $this->db->where('v.status','Active');
    $this->db->where('o.stoke >',0);
     $this->db->where('o.valid_date >=', $date);
    $this->db->order_by('o.add_date', 'DESC');
    $this->db->limit(4);
      $query=$this->db->get();
    return $query->result();

      // $this->db->select($select);
      // $this->db->from($tablename);
      // $this->db->where($col1,$id1);
      // $this->db->where($col2,$id2);
     
      // $this->db->where('stoke >=', 1);
      // $this->db->order_by("id","DESC");
      // $query = $this->db->get();
      // return $query->result();
      }
function branch_code_Join($branch_code,$offer_id){

   $this->db->select('b.id,b.branch_name,b.branch_code,,v.offer_id,v.branch_id');
    $this->db->from('branch b');
    $this->db->join('old_selected_branch_offer v', 'v.branch_id = b.id', 'left');

    $this->db->where('b.branch_code',$branch_code);
     $this->db->where('v.offer_id',$offer_id);  
      $query=$this->db->get();
    return $query->result();
  }
function Offer_chk_user_history($tablename,$select,$col1,$id1,$col2,$id2,$col3,$id3){
      $this->db->select($select);
      $this->db->from($tablename);
      $this->db->where($col1,$id1);
      $this->db->where($col2,$id2);
      $this->db->where($col3,$id3);
      // $this->db->where('count_used >=', $count);
      $this->db->order_by("claimed_offer_id","DESC");
      $query = $this->db->get();
      return $query->result();
      }


function Limited_Offer_chk($tablename,$select,$col1,$id1,$date){
      $this->db->select($select);
      $this->db->from($tablename);
      $this->db->where($col1,$id1);
      $this->db->where('valid_date >=', $date);
      // $this->db->where('stoke >=', 1);
      $this->db->order_by("id","DESC");
      $query = $this->db->get();
      return $query->result();
      }

 public function wherebyLatestDateLimit2($tablename,$col,$col1,$id1)
  {
    $this->db->select($col);
    $this->db->where($col1,$id1);
    $this->db->order_by('added_date', 'DESC');
    $this->db->limit(15);
      $query=$this->db->get($tablename);
    return $query->result();
  }

function Saving_chk($user_id){
   $this->db->select('v.*,m.name,o.offer_title');
    $this->db->from('claimed_offer_item v');
    $this->db->join('vendor m', 'm.id = v.vendor_id', 'right');
    $this->db->join('vendor_offers o', 'o.id = v.offer_id', 'right');

    $this->db->where('v.user_id',$user_id);
    $this->db->where('saving_value >=', 1);
     $this->db->where('v.claimed_status','2');  // successfully claimed 
    $this->db->order_by('v.claimed_offer_id','DESC'); 
      $query = $this->db->get();
      return $query->result();
      }
public function total_sum_saving($tablename,$col1,$id1,$col2,$id2)      //m.id as mainid
    {
    $this->db->select('sum(saving_value) AS total_saving');
    $this->db->where($col1,$id1);
      $this->db->where($col2,$id2);
      $this->db->where('saving_value >=', 1);    
    $query = $this->db->get($tablename); 
     return $query->result();
  }

  function Points_chk($user_id){
    $this->db->select('mp.id,v.point_title,v.point_description,mp.reward_points,mp.create_date,mp.user_id');
    $this->db->from('points_setup v');
    $this->db->join('my_points mp', 'mp.point_setup_id = v.point_setup_id', 'right');
      
      $this->db->where('mp.user_id',$user_id);
      // $this->db->where('mp.reward_points !=', 0);
        $this->db->where('mp.status', 1);
      $this->db->order_by("mp.create_date","DESC");
      $query = $this->db->get();
      return $query->result();
      }
public function total_sum_Points($tablename,$col1,$id1,$col2,$id2)      //m.id as mainid
    {
    $this->db->select('sum(reward_points) AS total_points');
    $this->db->where($col1,$id1);
      $this->db->where($col2,$id2);
    $query = $this->db->get($tablename); 
     return $query->result();
  }
function Points_chk_scratch($tablename,$select,$col1,$id1,$col2,$id2,$col3,$id3){
      $this->db->select($select);
      $this->db->from($tablename);
      $this->db->where($col1,$id1);
      $this->db->where($col2,$id2);
       $this->db->where($col3,$id3);
      $this->db->where('points >=', 1);
      $this->db->order_by("id","DESC");
      $this->db->limit(1);
      $query = $this->db->get();
      return $query->result();
      }
 function BetweenTwoValues($tablename,$select,$from,$to){
      $this->db->select($select);
      $this->db->from($tablename);
      $this->db->where('year_name >=', $from);
      $this->db->where('year_name <=', $to);
      $this->db->order_by("id","DESC");
      $this->db->limit('10');
      $query = $this->db->get();
      return $query->result();
      }

 public function funFav_Vendors_join($main_id)      //m.id as mainid
    {
    $this->db->select('v.*');
    $this->db->from('vendor v');
    $this->db->join('favorite_store fv', 'fv.vendor_id = v.id', 'right');

    $this->db->where('fv.user_id',$main_id);
    $this->db->where('fv.status',1);
    $this->db->order_by('fv.id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
 public function funPlan_Order_join($main_id)      //user_id as mainid
    {
    $this->db->select('v.*,fv.plan_type,fv.description');
    $this->db->from('transaction_all v');
    $this->db->join('user_subscription_plan fv', 'fv.subscription_id = v.plan_id', 'right');

    $this->db->where('v.user_id',$main_id);
    $this->db->where('v.status','Active');
    $this->db->where('v.payment_status',"paid");
    $this->db->where('v.expire_account',"No");
    $this->db->limit(1);
    $this->db->order_by('v.transaction_id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
   public function funPlan_Order_join_All($main_id)      //m.id as mainid
    {
    $this->db->select('v.*,fv.plan_type,fv.description');
    $this->db->from('transaction_all v');
    $this->db->join('user_subscription_plan fv', 'fv.subscription_id = v.plan_id', 'right');

    $this->db->where('v.user_id',$main_id);
   $this->db->where('v.status','Active');
    $this->db->order_by('v.transaction_id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
 public function wheredetailtempLimit1($tablename,$where,$id)
  {
     $this->db->where($where,$id);
     $this->db->limit(1);
    $query=$this->db->get($tablename);

    return $query->result();
  }


public function IncreassPopularitybyone($tablename,$col,$id){
    $this->db->where($col,$id);
    // $this->db->where($col1,$id1);
    $this->db->set('popular', 'popular+1', FALSE);
    $this->db->update($tablename);
     if($this->db->affected_rows())
          return true;
           else
          return false;
  }
 public function funLevel_Offer_join($user_id)    
    {
    $this->db->select('m.claim_gift_id,v.gift_name,v.gift_description,v.img,v.stock,m.value AS gift_value,v.time_limit AS valid_date,vn.name AS shop_name,m.vendor_id,m.claim_status');
    $this->db->from('inventory_gift v');
    $this->db->join('my_gift m', 'm.Inventory_gift_id = v.id', 'right');
    $this->db->join('vendor vn', 'vn.id = m.vendor_id', 'right');
    // $this->db->set('m.claim_status','1');
    $this->db->where('m.user_id',$user_id);
    $this->db->order_by('m.claim_gift_id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
  public function funVoucher_join($user_id)      //m.id as mainid
    {
    $this->db->select('v.*,m.name,o.offer_title');
    $this->db->from('claimed_offer_item v');
    $this->db->join('vendor m', 'm.id = v.vendor_id', 'right');
    $this->db->join('vendor_offers o', 'o.id = v.offer_id', 'right');

    $this->db->where('v.user_id',$user_id);
     $this->db->where('v.claimed_status','2');  // successfully claimed 
    $this->db->order_by('v.claimed_offer_id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
public function updateUserOfferClaimed($tablename,$user_id,$offer_id,$branch_id,$date,$saving,$claimed_offer_id){
    $this->db->where('offer_id',$offer_id);
     $this->db->where('user_id',$user_id);
       $this->db->where('claimed_offer_id',$claimed_offer_id);
     $this->db->set('count_used', 'count_used+1', FALSE);
    $this->db->set('saving_value', 'saving_value+'.$saving.'', FALSE);
     $this->db->set('claimed_status',2);
    $this->db->set('branch_id',$branch_id);
    $this->db->set('claimed_date',$date);
    $this->db->update($tablename);
      if($this->db->affected_rows())
          return true;
           else
          return false;
  }
 public function updateUserOfferHistroy($tablename,$col,$id,$col1,$id1,$saving,$points){
    $this->db->where($col,$id);
     $this->db->where($col1,$id1);
     $this->db->set('count_used', 'count_used+1', FALSE);
    $this->db->set('saving', 'saving+'.$saving.'', FALSE);
    $this->db->set('points', 'points+'.$points.'', FALSE);
     $this->db->set('status','1' );
    $this->db->set('code_sts','1' );
    $this->db->update($tablename);
      if($this->db->affected_rows())
          return true;
           else
          return false;
  }
  public function increase_decreaseByone($tablename,$col,$id){
    $this->db->where($col,$id);
    $this->db->set('stock', 'stock-1', FALSE);
   $this->db->set('used', 'used+1', FALSE);
    $this->db->update($tablename);
  }
   public function increase_decreaseByone33($tablename,$col,$id){
    $this->db->where($col,$id);
    $this->db->set('random_number', 'random_number-1', FALSE);
    $this->db->update($tablename);
  }


//*********************************************** not uses *************************************************************
 public function funVendor_join($main_id)      //m.id as mainid
    {
    $this->db->select('vr.id AS vr_id,vr.charges_per_km,vr.currency_type,vr.approx_time,v.*,o.id AS order_id,o.cat_name,o.title,o.pickup_loc,o.drop_loc,o.distance');
    $this->db->from('vendors_requests vr');
    $this->db->join('vendors v', 'v.id = vr.vendor_id', 'right');
    $this->db->join('temp_orders o', 'o.id = vr.order_id', 'right');

    $this->db->where('vr.order_id',$main_id);
    $this->db->where('vr.status',1);
    $this->db->order_by('vr.id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }

public function funTransitOrd_join($main_id)      //m.id as mainid
    {
    $this->db->select('o.*,v.id AS vendor_id,v.full_name,v.profile_img,v.ratting,vr.charges_per_km,vr.currency_type,vr.approx_time');
    $this->db->from('temp_orders o');
    $this->db->join('vendors_requests vr', 'vr.id = o.confirm_vendor_req_id', 'right');
    $this->db->join('vendors v', 'v.id = vr.vendor_id', 'right');

    $this->db->where('o.user_id',$main_id);
    $this->db->where('o.status',1);
    $this->db->where('o.order_sts',2);
    $this->db->order_by('o.id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }



  public function forcheckout_join($user_id)      //m.id as mainid
    {
    $this->db->select('sum(p.price * a.quantity) AS total_price_sum');
    $this->db->from('product_item p'); //download_manage  study_material 
    $this->db->join('temp_add_to_cart a', 'a.p_id=p.id', 'LEFT');
    $this->db->where('a.user_id',$user_id);
    $this->db->order_by('a.id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
  public function PayNowOrderDetail_join($user_id)      //m.id as mainid
    {
    $this->db->select('a.user_id,a.p_id,(p.price * a.quantity) AS t_price, CONCAT (s.p_name, \'  \', p.size) as product_name,a.quantity');
    $this->db->from('product_item p'); //download_manage  study_material product_name
    $this->db->join('temp_add_to_cart a', 'a.p_id=p.id', 'LEFT');
      $this->db->join('product_detail11 s', 's.id=a.super_p_id', 'left');
    $this->db->where('a.user_id',$user_id);
    $this->db->order_by('a.id','DESC');         
    $query = $this->db->get(); 
     return $query->result();
  }
  public function increaseByone($tablename,$col,$id,$col1,$id1){
    $this->db->where($col,$id);
     $this->db->where($col1,$id1);
    $this->db->set('likes_count', 'likes_count+1', FALSE);
    $this->db->update($tablename);

  }



   public function updatewhere2($tablename,$col,$id,$col1,$id1,$id2){
    $this->db->where($col,$id);
     $this->db->where($col1,$id1);
    $this->db->set($id2, FALSE);
    $this->db->update($tablename);
  }

  

   public function RemoveCartQuantity($tablename,$col,$id,$col1,$id1){
    $this->db->where($col,$id);
    $this->db->where($col1,$id1);
    $this->db->set('quantity', 'quantity-1', FALSE);
    $this->db->update($tablename);
     if($this->db->affected_rows())
          return true;
           else
          return false;
  }


   public function RemoveProductItemQuantity($tablename,$col,$id,$value){
    $this->db->where($col,$id);
    $this->db->set('total_qty', 'total_qty-'.$value.'', FALSE);
    $this->db->update($tablename);
     if($this->db->affected_rows())
          return true;
           else
          return false;
  }
   public function RemoveCouponQuantity($tablename,$col,$id){
    $this->db->where($col,$id);
    $this->db->set('remaining_coupon', 'remaining_coupon-1', FALSE);
    $this->db->update($tablename);
     if($this->db->affected_rows())
          return true;
           else
          return false;
  }

 public function funcartshow_join($main_id)
    {
    $this->db->select('m.id,t.id as cart_p_id,m.product_img,m.product_name,m.price,m.mrp,m.offer_percent,m.product_code,t.product_color,t.product_size,m.return_policy,m.cancel_policy,m.shipping_charge');
    $this->db->from('product_detail m'); 
    $this->db->join('add_to_cart t', 't.product_id=m.id', 'LEFT');
    // $this->db->join('student_fees_detail l', 'l.admission_no=t.admission_no', 'right');
    $this->db->where('t.user_id',$main_id);
           $this->db->where('t.status',1);   
          $this->db->order_by('t.id','DESC');            
    $query = $this->db->get(); 
    return $query->result();
    }
}
?>    