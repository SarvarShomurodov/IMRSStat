function submitForm() {
    var form = document.getElementById("carForm");
    var selectedValue = document.getElementById("carSelect").value;
    // Navigate to the selected page without adding the parameter to the URL
    window.location.href = selectedValue;
}