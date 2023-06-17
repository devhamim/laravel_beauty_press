 <div class="card" style="border:0px;">
     <div class="card-header" style="border:0px;">
         <div style="display: flex; justify-content: center; font-size: 150%; font-weight: bold;">
             Book your shipping order</div>
     </div>
     <div class="card-body">
         <div class="modal-content fare-rate-modal">
             <form action="#" method="post">
                 <?php echo csrf_field(); ?>
                 <div class="form-row mb-1">Select Date:</div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="date" name="date" class="form-control"
                             placeholder="approx date" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Carton quantity:</div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="number" name="ctnQuantity" class="form-control"
                             placeholder="quantity" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Total CBM:</div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="number" name="totalCbm" class="form-control"
                             placeholder="total CBM" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Product Quantity:</div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="number" name="productQuantity" class="form-control"
                             placeholder="product quantity" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Products Total Cost:</div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="number" name="productsTotalCost" class="form-control"
                             placeholder="total Cost(BDT)" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Product Name (specific):
                 </div>
                 <div class="form-row mb-2">
                     <div class="col"><input type="text" name="othersProductName" class="form-control"
                             placeholder="product name" required="" value=""
                             style="border-radius: 10rem; width: 60%;">
                     </div>
                 </div>
                 <div class="form-row mb-1">Products Image:</div>
                 <div class="form-row mb-4">
                     <div class="box-input-file" style="display: flex; justify-content: center;">
                         <input id="upload-image-input" name="bookingProduct" class="upload" type="file">
                     </div>
                 </div>

             </form>
             <button class="btn f-right nextBtn-2 btn-success" type="button">Book Now</button>
         </div>
     </div>

 </div>
<?php /**PATH /home/anandadhara/public_html/resources/views/frontend/content/booking.blade.php ENDPATH**/ ?>