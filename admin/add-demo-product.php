<style>
    .editor1, .editor2 {
        width: 100%;
        height: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        overflow-y: auto;
        font-family: Arial, sans-serif;
        line-height: 1.5;
        background-color: #f9f9f9;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .toolbar1, .toolbar2 {
        margin-bottom: 10px;
    }

    .toolbar1 button, .toolbar2 button {
        padding: 8px 12px;
        font-size: 14px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s, border-color 0.2s;
        margin-right: 4px;
    }

    .toolbar1 button:hover, .toolbar2 button:hover {
        background-color: #ddd;
        border-color: #aaa;
    }

    .toolbar1 button:active, .toolbar2 button:active {
        background-color: #ccc;
        border-color: #888;
    }

    .toolbar1 button:focus, .toolbar2 button:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 255, 0.2);
    }

    .output-textarea1, .output-textarea2 {
        width: 100%;
        height: 200px;
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        font-family: Arial, sans-serif;
        font-size: 14px;
        white-space: pre-wrap;
        background-color: #fff;
    }
</style>



<?php
// Uncomment to start the session if needed
// session_start();

// Uncomment to check for session variable if needed
// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }

include_once "include/header.php";
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = i($_POST['product_name']);
    $cat_id = i($_POST['cat_id']);
    $sub_id = i($_POST['sub_id']);
    $micro_id = i($_POST['micro_id']);
    $inner_cat_id = i($_POST['inner_cat_id']);
    $product_description = ($_POST['product_description']);
    $price = i($_POST['price']);
    $state_name = i($_POST['state_name']);

    $company_name = i($_POST['company_name']);
    $company_experience = i($_POST['company_experience']);
    $iec = i($_POST['iec']);
    $gst = i($_POST['gst']);
    $website = i($_POST['website']);
    $client_name = i($_POST['client_name']);
    $about_company = addslashes(($_POST['about_company']));
    $country_name = i($_POST['country_name']);
    $moq = i($_POST['moq']);
    $packaging_type = i($_POST['packaging_type']);
    $product_life = i($_POST['product_life']);
    $plan = i($_POST['plan']);
    $feature = i($_POST['feature']);
    $unit = i($_POST['unit']);
    $business_type = i($_POST['business_type']);
    $company_address = i($_POST['company_address']);

    // Handle file uploads
    $product_image1 = $_FILES["product_image1"]["name"];
    $fld1 = "extra_image/" . $product_image1;
    move_uploaded_file($_FILES["product_image1"]['tmp_name'], $fld1);

    $company_logo = $_FILES["company_logo"]["name"];
    $fld2 = "extra_image/" . $company_logo;
    move_uploaded_file($_FILES["company_logo"]['tmp_name'], $fld2);


    $stmt = $con->prepare("INSERT INTO  product ( product_name ,  price ,  product_description ,  cat_id ,  sub_id ,  micro_id ,  inner_cat_id ,  product_image1 ,  state_name , country_name ,  company_name ,  company_experience ,  iec ,  gst ,  website ,  company_logo ,  client_name  , about_company , moq  , packaging_type , product_life , feature , unit , business_type ,  company_address,plan ) value (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?, ?, ?,?, ?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('sssssssssssssssssssssssssd',  $product_name,  $price,  $product_description,  $cat_id,  $sub_id,  $micro_id,   $inner_cat_id,  $fld1,  $state_name, $country_name, $company_name,  $company_experience,  $iec,  $gst,  $website,  $fld2,  $client_name, $about_company, $moq, $packaging_type, $product_life, $feature,  $unit, $business_type, $company_address, $plan);

    $stmt->execute();

    // Close the statement and connection
    $stmt->close();

    // $sql = "INSERT INTO `product`(`product_name`, `price`, `product_description`, `cat_id`, `sub_id`, `micro_id`, `inner_cat_id`, `product_image1`, `state_name`,`country_name`, `company_name`, `company_experience`, `iec`, `gst`, `website`, `company_logo`, `client_name`,`about_company`,`moq`,`packaging_type`,`product_life`,`feature`,`unit`,`business_type`,`company_address`) value ('$product_name', '$price', '$product_description', '$cat_id', '$sub_id', '$micro_id', '$inner_cat_id', '$fld1', '$state_name','$country_name','$company_name', '$company_experience', '$iec', '$gst', '$website', '$fld2', '$client_name','$about_company','$moq','$packaging_type','$product_life','$feature','$unit','$business_type','$company_address')";
    // $q = mysqli_query($con, $sql);
}
function i($data)
{
    $data = trim($data);
    $data = preg_replace('/\s+/', ' ', $data); // Remove all whitespace characters
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// $mysqli->close();
?>

<div class="right_col" role="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-white p-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="servicesForm" method="post" enctype="multipart/form-data">
                    <h5>Add Products</h5>
                    <div class="row">
                        <div class="col-12 col-lg-6 my-2">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" class="form-control q" id="product_name">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="product_image1">Product Image (Min 1 Image)</label>
                            <div class="row">
                                <div class="col-12">
                                    <div class="border">
                                        <input class="form-control" name="product_image1" type="file" id="product_image1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="price">Product Price</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="price">Product Unit</label>
                            <input type="text" class="form-control" name="unit" id="price">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="cat_id">Add Category</label>
                            <select name="cat_id" class="form-control" id="category-dropdown">
                                <option value="">------ Select Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `category`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['cat_id']}' class='text-capitalize'>{$row['cat_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="sub_id">Add Sub Category</label>
                            <select name="sub_id" class="form-control" id="sub-category-dropdown">
                                <option value="">------ Select Sub Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `sub_cat`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['sub_id']}' class='text-capitalize'>{$row['sub_cat_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="inner_cat_id">Add Inner Category</label>
                            <select name="inner_cat_id" class="form-control" id="inner-category-dropdown">
                                <option value="">------ Select Inner Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `inner_cat`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['inner_cat_id']}' class='text-capitalize'>{$row['inner_cat_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="micro_id">Add Micro Category</label>
                            <select name="micro_id" class="form-control" id="micro-category-dropdown">
                                <option value="">------ Select Micro Category -----</option>
                                <?php
                                $sel = "SELECT * FROM `micro`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['micro_id']}' class='text-capitalize'>{$row['micro_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="state_name">Add States</label>
                            <select name="state_name" class="form-control" id="state-dropdown">
                                <option value="">------ Select State -----</option>
                                <?php
                                $sel = "SELECT * FROM `states`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['state_name']}' class='text-capitalize'>{$row['state_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="business_type">business_type</label>
                            <select name="business_type" class="form-control" id="state-dropdown">
                                <option value="">----- Select Primary Business -----</option>
                                <option value="exporter">Exporter</option>
                                <option value="supplier">Supplier</option>
                                <option value="Manufacturer">Manufacturer</option>

                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="country_name">Country Name</label>
                            <select name="country_name" class="form-control" id="country-dropdown">
                                <option value="">------ Select Country -----</option>
                                <?php
                                $sel = "SELECT * FROM `countries`";
                                $query = mysqli_query($con, $sel);
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<option value='{$row['country_name']}' class='text-capitalize'>{$row['country_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="country_name">Plan</label>
                            <select name="plan" class="form-control" id="country-dropdown">
                                <option value="not-active">Not Active</option>
                                <option value="prime">Prime </option>
                                <option value="prime-pro">Prime Pro </option>
                                <option value="ultra">Ultra </option>
                                <option value="ultra-pro"> Ultra Pro </option>

                            </select>
                        </div>
                        <div class="col-12">
                            <hr>
                            
                        </div>
                        <div class="row ">
                             <div>
                                    <h3>Product Description</h3>
                                    <div class="toolbar1">
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'formatBlock', 'p')">Paragraph</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'bold')">Bold</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'italic')">Italic</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'underline')">Underline</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'insertOrderedList')">Ordered List</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'insertUnorderedList')">Unordered List</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'justifyCenter')">Center</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'formatBlock', 'h3')">Heading 3</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'formatBlock', 'h4')">Heading 4</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'formatBlock', 'h5')">Heading 5</button>
                                        <button  type="button"  onclick="formatText('editor1', 'output-textarea1', 'formatBlock', 'h6')">Small Heading</button>
                                        <button  type="button"  onclick="insertTable('editor1', 'output-textarea1')">Insert Table</button>
                                    </div>
                                    <div class="editor1" contenteditable="true" oninput="updateTextarea('editor1', 'output-textarea1')"></div>
                                    <textarea name="product_description" class="output-textarea1" readonly></textarea>
                                </div>
                                
                                <!-- === About Company Editor === -->
                                <div style="margin-top: 40px;">
                                    <h3>About Company</h3>
                                    <div class="toolbar2">
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'formatBlock', 'p')">Paragraph</button>
                                        <button type="button"  onclick="formatText('editor2', 'output-textarea2', 'bold')">Bold</button>
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'italic')">Italic</button>
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'underline')">Underline</button>
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'insertOrderedList')">Ordered List</button>
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'insertUnorderedList')">Unordered List</button>
                                        <button  type="button" onclick="formatText('editor2', 'output-textarea2', 'justifyCenter')">Center</button>
                                        <button type="button"  onclick="formatText('editor2', 'output-textarea2', 'formatBlock', 'h3')">Heading 3</button>
                                        <button type="button"  onclick="formatText('editor2', 'output-textarea2', 'formatBlock', 'h4')">Heading 4</button>
                                        <button type="button"  onclick="formatText('editor2', 'output-textarea2', 'formatBlock', 'h5')">Heading 5</button>
                                        <button type="button"  onclick="formatText('editor2', 'output-textarea2', 'formatBlock', 'h6')">Small Heading</button>
                                        <button type="button"  onclick="insertTable('editor2', 'output-textarea2')">Insert Table</button>
                                    </div>
                                    <div class="editor2" contenteditable="true" oninput="updateTextarea('editor2', 'output-textarea2')"></div>
                                    <textarea name="about_company" class="output-textarea2" readonly></textarea>
                                </div>



                        </div>

                        <div class="col-12 col-lg-6 my-2">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" class="form-control" id="company_name">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="company_address">Company Address</label>
                            <input type="text" name="company_address" class="form-control" id="company_name">
                        </div>

                        <div class="col-12 col-lg-6 my-2">
                            <label for="company_logo">Company Logo</label>
                            <div class="border">
                                <input class="form-control" name="company_logo" type="file" id="company_logo">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="company_experience">Company Experience</label>
                            <input type="text" name="company_experience" class="form-control" id="company_experience">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="iec">IEC</label>
                            <input type="text" name="iec" class="form-control" id="iec">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="gst">GST</label>
                            <input type="text" name="gst" class="form-control" id="gst">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="website">Company Website</label>
                            <input type="text" name="website" class="form-control" id="website">
                        </div>
                        <div class="col-12 col-lg-6 my-2">
                            <label for="client_name">Client Name</label>
                            <input type="text" name="client_name" class="form-control" id="client_name">
                        </div>


                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-3 my-2">
                                    <label for="client_name">MOQ</label>
                                    <input type="text" name="moq" class="form-control" id="client_name">
                                </div>
                                <div class="col-3 my-2">
                                    <label for="client_name">Packaging Type</label>
                                    <input type="text" name="packaging_type" class="form-control" id="client_name">
                                </div>
                                <div class="col-3 my-2">
                                    <label for="client_name">Product Life</label>
                                    <input type="text" name="product_life" class="form-control" id="client_name">
                                </div>
                                <div class="col-3 my-2">
                                    <label for="client_name">Feature</label>
                                    <input type="text" name="feature" class="form-control" id="client_name">
                                </div>
                            </div>
                        </div>



                        <div class="col-12 my-2 text-right">
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Function to apply formatting
    function formatText(editorClass, textareaClass, command, value = null) {
        const editor = document.querySelector(`.${editorClass}`);
        editor.focus();
        document.execCommand(command, false, value);
        updateTextarea(editorClass, textareaClass);
    }

    // Function to update textarea with editor content
    function updateTextarea(editorClass, textareaClass) {
        const content = document.querySelector(`.${editorClass}`).innerHTML;
        document.querySelector(`.${textareaClass}`).value = content;
    }

    // Function to insert a table
    function insertTable(editorClass, textareaClass) {
        const rows = prompt("Enter number of rows:", "2");
        const cols = prompt("Enter number of columns:", "2");

        if (rows && cols) {
            let table = "<table class='table' cellpadding='5' cellspacing='0'>";
            for (let i = 0; i < rows; i++) {
                table += "<tr>";
                for (let j = 0; j < cols; j++) {
                    table += "<td>&nbsp;</td>";
                }
                table += "</tr>";
            }
            table += "</table>";

            const editor = document.querySelector(`.${editorClass}`);
            editor.focus();
            document.execCommand('insertHTML', false, table);
            updateTextarea(editorClass, textareaClass);
        }
    }
</script>
<?php
include_once "include/footer.php";
?>