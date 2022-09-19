<script>
    function myFunctions() {
    document.getElementById("myDropdowns").classList.toggle("show");
    window.onclick = function(event){
        if(!event.target.matches('.dropbtns')){
            var dropdowns = document.getElementsByClassName("dropdowns-content");
            var i;
            for (i = 0; i < dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}

function myFunctions2() {
    document.getElementById("myDropdown").classList.toggle("shows");
    window.onclick = function(event){
        if(!event.target.matches('.dropbtns')){
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++){
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('shows')) {
                    openDropdown.classList.remove('shows');
                }
            }
        }
    }
}
</script>