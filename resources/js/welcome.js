$(function (){



    $('a#filter-button').click(function (){
       const form = $('form.sidebar-filter').serialize();

        $.ajax({
            method: "GET",
            url: "/home#",
            data: form
        }).done(function (response) {
            console.log(response.data)
            $('div#album-wrapper').empty();
            $.each(response.data, function (index, album){
                const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' +
                    '                            <div class="card h-100 border-0">' +
                    '                                <div class="card-img-top">' +
                    '                                    <img src="'+ storagePath + album.image_path +'" class="img-fluid mx-auto d-block" alt="Card image cap" width="240" height="240">' +
                    '                                </div>' +
                    '                                <div class="card-body text-center">' +
                    '                                    <h4 class="card-title">' +
                    '                                        <a href="product.html" class=" font-weight-bold text-dark text-uppercase small">' + album.album_name + '</a>' +
                    '                                    </h4>' +
                    '                                    <h5 class="card-price small">' +
                    '                                        <i>'+ album.album_name +'</i>' +
                    '                                    </h5>' +
                    '                                    <button class="btn btn-success btn-sm delete"  data-id='+album.id+'>' +
                    '                                        +' +
                    '                                    </button>' +
                    '                                </div>' +
                    '                            </div>' +
                    '                        </div>';
                $('div#album-wrapper').append(html);

                $(function (){
                    $('.delete').click(function (){
                        console.log('aaa');
                        $.ajax({
                            method: "POST",
                            url: "http://127.0.0.1:8000/home/" + $(this).data("id"),
                            //  data: { id: $(this).data("id") }
                        })
                            .done(function( response ) {
                                window.location.reload();
                            })

                    });
                });
            });
        }).fail(function (data) {
            alert("Error")
        });
    });

});
