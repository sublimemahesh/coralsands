$(document).ready(function () {
    $("#gallery").on('click', '.delete-gallery', function () {
        var r = confirm("Are you really want delete this activities?....");

        if (r) {
            var id = this.id;

            $.ajax({
                url: "../ajax/gallery/delete-gallery.php",
                type: "POST",
                data: {
                    Gallery: true,
                    Id: id
                },
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {
                        id.fadeOut().remove();
                    } else {
                        alert('wrong');
                    }
                }
            });
            RemoveRow(id);
        }
    });
});

function RemoveRow(id) {
    $('#gal_' + id).remove();
}