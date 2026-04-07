<?php
 
include_once "include/header.php";



?>
 


<!-- new data -->
<div class="right_col" role="main">
    <div class="container mt-5">
        <a href="https://growindiaexport.com/admin/view-story.php" class="btn btn-success text-white">View All Story Table</a>
        <div class="row  justify-content-center">
            <div class="col-7">
                 <form action="up-data.php" method="post" enctype="multipart/form-data">
                <div id="image-fields">
                <div class="image-field">
                 <input type="file" name="images[]" class="form-control my-3" required>
                <input type="text" name="captions[]" class="form-control my-3"  placeholder="Caption for this image" required>
        </div>
    </div>
    <br>
    <button type="button" class="btn btn-primary btn btn-sm" onclick="addField()">Add Another Image</button><br><br>
    <input type="submit" class="btn btn-success " name="submit" value="Upload">
    <input type="reset" class="btn btn-success "   >
         </form>
            </div>
        </div>
    </div>

</div>



<script>
function addField() {
    const container = document.getElementById('image-fields');
    const div = document.createElement('div');
    div.className = 'image-field';
    div.innerHTML = `
        <input type="file" name="images[]" class="form-control my-3"  required>
        <input type="text" name="captions[]" class="form-control my-3"  placeholder="Caption for this image" required>
    `;
    container.appendChild(div);
}
</script>

<script>
        // Get all elements with class 'q' (the three input fields)
        const inputs = document.getElementsByClassName('q');
    
        // Special characters to check for
        const specialCharacters = ['<', '>', '#', '^', ',', '*' ,'!','~','`','$','/','(',')'];
    
        // Function to validate input and alert if special characters are detected
        function validateInput(event) {
            const inputValue = event.target.value;
    
            // Check if any special character is found in the input
            for (let char of specialCharacters) {
                if (inputValue.includes(char)) {
                    alert("Special character detected!");
                    event.target.value = "";  // Clear the input value
                    break;  // Stop after the first special character is found
                }
            }
        }
    
        // Add event listener to all inputs
        for (let input of inputs) {
            input.addEventListener('input', validateInput);
        }
    </script>


<!-- /page content -->
<?php
include_once "include/footer.php";
?>