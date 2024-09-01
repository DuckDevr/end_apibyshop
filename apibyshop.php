<div class="container-sm bg-white mt-5 border shadow-sm p-4 mb-4 rounded" data-aos="fade-down">
    <center>
        <h1 class="">&nbsp;<i class="fa-duotone fa-user"></i>&nbsp;จัดการ Api Byshop</h1>
    </center>
    <hr>
    
    <div class="col-lg-6 m-auto">
        <h3>ตั้งค่าหลัก</h3>
        <div class="mb-2 <?php echo $bg?> shadow-sm p-4 mb-4 rounded">
            
            <p class="m-0">เปิด / ปิด<span class="text-danger">*</span></p>
            <select class="form-control mb-2"  id="st">
                <option value="on" <?php if ($byshop_status == "on") {echo "selected";} ?> style="color: #000">On</option>
                <option value="off" <?php if ($byshop_status == "off") {echo "selected";} ?> style="color: #000">Off</option>
            </select>

            <div class="mb-2 ">
                <p class="m-0  ">Api Key<span class="text-danger">*</span></p>
                <input type="text" id="apikey" class="form-control" value="<?php echo $byshop_key; ?>">
            </div>

            <div class="mb-2 ">
                <p class="m-0  ">ราคาที่จะบวกเพิ่ม<span class="text-danger">*</span></p>
                <input type="text" id="cost" class="form-control" value="<?php echo $byshop_cost; ?>">
            </div>
            


            <button class="btn  bg-main w-100" id="subm">บันทึกข้อมูล</button>
            <button class="btn  bg-main w-100 mt-2" id="check">เช็คยอดเงินของคุณ</button>
        </div>
        
    </div>
</div>
