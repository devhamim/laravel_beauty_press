<form name="d2d" action="{{ route('frontend.pages.d2d') }}" method="GET">
    <div class="row">

        <div class="col-sm-2" style="border-right: 2px solid gray;">
            <select class="form-control" name="type">
                <option value="d2d">D2D</option>
            </select>
        </div>

        <div class="col-sm-2" style="border-right: 2px solid gray;">
            <select class="form-control" name="country">
                <option value="">Select Country</option>
                <option value="china">China</option>
                <option value="hongkong">HongKong</option>
            </select>
        </div>

        <div class="col-sm-2" style="border-right: 2px solid gray;">
            <input type="text" id="to_country" class="form-control" name="to_country" readonly="Dhaka,Bangladesh"
                placeholder="Dhaka,Bangladesh">
        </div>

        <div class="col-sm-2" style="border-right: 2px solid gray;">
            <input type="text" id="weight" class="form-control" name="weight" placeholder="Enter Weight">
        </div>

        <div class="col-sm-3" style="border-right: 2px solid gray;">
            <select class="form-control" name="product-type">
                <option value="">Select Product Type</option>
                <option value="Artificial flower">Artificial flower</option>
                <option value="Automobile parts">Automobile parts</option>
                <option value="Baby Bouncer">Baby Bouncer</option>
                <option value="Baby Srtoller ">Baby Srtoller </option>
                <option value="Baby Toys(with battery)">Baby Toys(with battery)</option>
                <option value="Baby Toys(without bettary)">Baby Toys(without bettary)</option>
                <option value="Baby set dress">Baby set dress</option>
                <option value="Backpack">Backpack</option>
                <option value="Bag accesssories">Bag accesssories</option>
                <option value="Ball pen">Ball pen</option>
                <option value="Belt">Belt</option>
                <option value="Bicycle (Complete)">Bicycle (Complete)</option>
                <option value="Bicycle parts">Bicycle parts</option>
                <option value="Blezer">Blezer</option>
                <option value="Button ">Button </option>
                <option value="Chemical">Chemical</option>
                <option value="CC Camera">CC Camera</option>
                <option value="Cable">Cable</option>
                <option value="Candle">Candle</option>
                <option value="Ceramic Coating ">Ceramic Coating </option>
                <option value="Charger or Adapter">Charger or Adapter</option>
                <option value="Clock">Clock</option>
                <option value="Comb (without Battery)">Comb (without Battery)</option>
                <option value="Complete TV">Complete TV</option>
                <option value="Computer PC">Computer PC</option>
                <option value="Computer accesssories">Computer accesssories</option>
                <option value="Computer motherboard">Computer motherboard</option>
                <option value="Computer proccessor">Computer proccessor</option>
                <option value="Cosmetics">Cosmetics</option>
                <option value="Derma Roller ">Derma Roller </option>
                <option value="Dress(other)">Dress(other)</option>
                <option value="Empty Luggage">Empty Luggage</option>
                <option value="Fabrics">Fabrics</option>
                <option value="Fan (ceiling)">Fan (ceiling)</option>
                <option value="Fan (small)">Fan (small)</option>
                <option value="Furniture item ">Furniture item </option>
                <option value="GPS Tracker ">GPS Tracker </option>
                <option value="Gadget item">Gadget item</option>
                <option value="Garments accesssories">Garments accesssories</option>
                <option value="General watch">General watch</option>
                <option value="Glass Beads">Glass Beads</option>
                <option value="Hair Straightener">Hair Straightener</option>
                <option value="Hand purse">Hand purse</option>
                <option value="Hardware items">Hardware items</option>
                <option value="Headphone(Bluetooth)">Headphone(Bluetooth)</option>
                <option value="Headphone(normal)">Headphone(normal)</option>
                <option value="Jersy">Jersy</option>
                <option value="Jewellery">Jewellery</option>
                <option value="Keyboard (Blutooth)">Keyboard (Blutooth)</option>
                <option value="Keyboard (Normal)">Keyboard (Normal)</option>
                <option value="LCD panel">LCD panel</option>
                <option value="LED Monitor">LED Monitor</option>
                <option value="LED light">LED light</option>
                <option value="Ladies shoulder bag">Ladies shoulder bag</option>
                <option value="Lantern">Lantern</option>
                <option value="Laptop">Laptop</option>
                <option value="Light accesssories">Light accesssories</option>
                <option value="Lipstick">Lipstick</option>
                <option value="Machine parts">Machine parts</option>
                <option value="Medical item">Medical item</option>
                <option value="Menstrual Cup">Menstrual Cup</option>
                <option value="Micro wave woven">Micro wave woven</option>
                <option value="Mix item">Mix item</option>
                <option value="Mobile LCD">Mobile LCD</option>
                <option value="Mobile battery">Mobile battery</option>
                <option value="Mobile charger">Mobile charger</option>
                <option value="Mobile cover">Mobile cover</option>
                <option value="Mouse (Bluetooth)">Mouse (Bluetooth)</option>
                <option value="Mouse (Normal)">Mouse (Normal)</option>
                <option value="Networking Item ">Networking Item </option>
                <option value="Onu">Onu</option>
                <option value="Others">Others</option>
                <option value="Packaging materials ">Packaging materials </option>
                <option value="Pant">Pant</option>
                <option value="Perfume">Perfume</option>
                <option value="Playing card">Playing card</option>
                <option value="Printer Cartridge">Printer Cartridge</option>
                <option value="Printer parts">Printer parts</option>
                <option value="Printing Ink">Printing Ink</option>
                <option value="Router">Router</option>
                <option value="Sewing Machine (with Battery)">Sewing Machine (with Battery)</option>
                <option value="Sewing Machine (without Battery)">Sewing Machine (without Battery)</option>
                <option value="Shoe (Keds)">Shoe (Keds)</option>
                <option value="Shoes (Copy)">Shoes (Copy)</option>
                <option value="Shoes accesssories">Shoes accesssories</option>
                <option value="Shoes(kids)">Shoes(kids)</option>
                <option value="Shoes(slipper)">Shoes(slipper)</option>
                <option value="Smart switch">Smart switch</option>
                <option value="Smart watch">Smart watch</option>
                <option value="Spare parts">Spare parts</option>
                <option value="Sports goods">Sports goods</option>
                <option value="Sunglass">Sunglass</option>
                <option value="Switch and Socket">Switch and Socket</option>
                <option value="TV PCB">TV PCB</option>
                <option value="TV parts">TV parts</option>
                <option value="T_shirt">T_shirt</option>
                <option value="Table Lamp (with Battery)">Table Lamp (with Battery)</option>
                <option value="Table Lamp (without Battery)">Table Lamp (without Battery)</option>
                <option value="Travel bag">Travel bag</option>
                <option value="USB Lighter">USB Lighter</option>
                <option value="Umbrella ">Umbrella </option>
                <option value="Under garments">Under garments</option>
                <option value="Water pot">Water pot</option>
                <option value="Zipper">Zipper</option>
                <option value="wrist watch">wrist watch</option>
            </select>
        </div>
        <div class="col-sm-1">
            <button type="submit" class="btn btn-outline-primary btn-lg" id="d2d" name="d2d"><i
                    class="fa fa-search"></i></button>
            {{-- <a data-toggle="modal" href="#d2d-popup" data- target="#d2d-popup"><i
                    class="fa fa-search btn btn-outline-primary btn-lg"></i></a> --}}
        </div>
    </div>
</form>
