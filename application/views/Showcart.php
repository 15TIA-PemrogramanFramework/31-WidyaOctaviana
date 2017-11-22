<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php $this->load->view('Header') ?>
<link href="<?php echo base_url().'assets/'?>css/cart.css" rel="stylesheet" type="text/css" media="all"/>

<script src="<?php echo base_url().'assets/'?>js/jquery-1.11.0.min.js"></script>

</head>
<body>
   <section style="margin-top: 150px">
<div class="logo">
   <h3>Keranjang Belanja</h3>
</div>
<div class="cart">
   
   <div class="cart-bottom">
       <div class="table">
         <table>
            <tbody>
               <tr  class="main-heading">             
               <th>Gambar</th>
               <th class="long-txt">Keterangan product</th>
               <th>jumlah</th>
               <th>harga satuan</th>
               <th>Total</th>                   
              </tr>
              <?php

$banyak=count($semuabeli);
               $totalbayar=0; ?>
   <?php foreach ($semuabeli as $key => $value) { ?>
   <?php  


   $barang=$this->BarangModel->ambil_data_id($semuabeli[$key]['id_barang']); 
   $totalbayar=$totalbayar+($semuabeli[$key]['jumlah'] * $barang->harga_barang)
   ?>
              <tr class="cake-top">
               <td class="cakes">              
                  <div class="product-img">
              <img width="100px" height="100px" src="<?php echo base_url()."assets/"; ?>image/<?php echo $barang->gambar_barang ?>">
                  </div>
                 </td>
                 <td class="cake-text">
                  <div class="product-text">
                     <h3><?php echo $barang->nama_barang; ?></h3>
                     <p>Product Code: TLG12345</p>
                  </div>
             </td>
             <td class="quantity">            
                 <div class="product-right">
                   

<input type="number" min="1" id="banyakbarang<?php echo $barang->id_barang ?>" 
         value="<?php echo$semuabeli[$key]['jumlah'] ?>" 
         onclick="tambahbarang('<?php echo $barang->id_barang ?>')"  class="form-control input-small">

                 </div>
               </td>
               <td class="price">
                  <h4><div id="harga<?php echo $barang->id_barang ?>"><?php echo $barang->harga_barang; ?></div></h4>               
               </td>
                  <td class="btm-remove">
                  <h4> <div id="totalbarang<?php echo $barang->id_barang ?>" class="totalsendiri"><?php echo $semuabeli[$key]['jumlah'] * $barang->harga_barang ?></div></h4>

                  <div class="close-btm">
                  <h5><a href="<?php echo site_url("Cart/deleteCart/".$barang->id_barang) ?>" >batal</a></h5>
                 </div>
               </td>
            
 </tr>


<?php }  ?>

               
            </tbody>












         </table>
       </div>
       <div class="vocher">
         
         <div class="dis-total">
            <h1><div id="totalsemua"><?php echo $totalbayar; ?></div> </h1>
            <div class="tot-btn">
               <a class="shop" href="<?php echo site_url('Product'); ?>">Back to Shop</a>
               <?php if ($banyak>0): ?>
                  <a class="check" href="<?php echo site_url('Cart/Checkout'); ?>">Continue to Checkout</a>
               <?php endif ?>
            </div>
         </div>
         <div class="clear"> </div>
       </div>
   </div>
</div>

</section>
</body>
</html>
<div id="isi"></div>

 <script type="text/javascript">
         function tambahbarang(zz){
      //var x=document.getElementById("totalsendiri").value;

      document.getElementById("totalbarang"+zz).innerHTML=parseInt(document.getElementById("harga"+zz).innerHTML)*parseInt(document.getElementById("banyakbarang"+zz).value);
      var brg=document.getElementsByClassName("totalsendiri");
      var tot=0;
      for (var i = brg.length - 1; i >= 0; i--) {
         tot=parseInt(tot)+parseInt(brg[i].innerHTML);

      }
      document.getElementById("totalsemua").innerHTML=tot;

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
            //document.getElementById("isi").innerHTML = "aa";
         }
      };
      xmlhttp.open("POST","<?php echo site_url('Cart/setCart'); ?>"+"/"+zz+"/"+document.getElementById("banyakbarang"+zz).value, true);
      xmlhttp.send();
      
   }
</script>
<div class="copy-right">
      <p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>