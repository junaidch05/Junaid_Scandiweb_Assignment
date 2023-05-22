function changeForm() {
    var selectedType = document.getElementById("productType").value;
    var formContainer = document.getElementById("dynamic");

    // Clear the form container
    formContainer.innerHTML = "";

    if (selectedType === "dvd") {
        formContainer.innerHTML = `
        <label for="size">Size (MB):</label>
        <input  type="number" step="any" id="size" name="size" placeholder=" enter the size in mb" required>
        <h4> please provide size in MB </h4>
  
      `;
    } else if (selectedType === "book") {
        formContainer.innerHTML = `
        <label for="number">Weight (KG):</label>
        <input  type="number" step="any" id="weight" name="weight" placeholder=" enter the weight in kg"  required>
        <h4> please provide Weight in KG </h4>
       
      `;
    } else if (selectedType === "furniture") {
        formContainer.innerHTML = `
        <label for="height">Height (CM):</label>
        <input  type="number" step="any" id="height" name="height" placeholder=" enter the height in cm" required>
      
        <br>
        <label for="width">Width (CM):</label>
        <input  type="number" step="any" id="width" name="width"  placeholder=" enter the width in cm "  required>
 
        <br>
        <label for="length">Length (CM):</label>
   
        <input  type="number" step="any" id="length" name="length" placeholder=" enter the length in cm"  required>
        <br>
        <h4> please provide Dimensions in H x W x L  format </h4>
      `;
    }
}


var form = document.getElementById("product_form");
var submitButton = document.getElementById("saveproduct");

submitButton.addEventListener("click", function() {
    // Submit the form



    if (form.checkValidity()) {
        // Submit the form
        form.submit();
        form.reset()
    } else {
        // Display validation error messages

        form.reportValidity();

    }

});

