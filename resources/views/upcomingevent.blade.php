<div id="popup" class="popup" style="display: none;">
    <div class="popup-content">
        <h2>Upcoming events</h2>
        <p>event 1</p>
        <button class="btn btn-info" style="font-weight:bold" href="" onclick="closePopup(true)">view more</button>
        <a class="btn btn-info" style="font-weight:bold" onclick="closePopup(false)">close</a>
    </div>
</div>

<script>
    function openPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'flex';
    }

    function closePopup(choice) {
        var popup = document.getElementById('popup');
        popup.style.display = 'none';

        if (choice) {
            // Code to execute when "Yes" is clicked
        } else {
            // Code to execute when "No" is clicked
        }
    }
</script>