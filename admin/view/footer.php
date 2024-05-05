</div>
</div>
</body>
<script>
    var navItems = document.querySelectorAll("nav ul li");

    navItems.forEach(function(item) {
        item.addEventListener("click", function() {
            // Reset the color of all items
            navItems.forEach(function(item) {
                item.style.color = "";
                item.style.backgroundColor = "";
                item.style.borderLeft = "";
            });
            // Set the color of the clicked item to red
            item.style.color = "rgb(0, 195, 255)";
            item.style.backgroundColor = "rgb(255, 255, 255)";
            item.style.borderLeft = "2px solid blue";
            item.style.borderRadius = "0 50px 50px 0";
        });
    });
</script>
</html>