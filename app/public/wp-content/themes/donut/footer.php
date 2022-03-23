    <footer class="col-md-12 text-center p-3">
        © Kamil Pietraszko 2022 <a href="https://github.com/kpietraszkoGit">GitHub</a>
    </footer>


    <!-- Bootstrap Bundle with Popper and Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $(".menu-trigger").click(function(){
                $('nav').slideToggle();
            });
        });
    </script>
    <script>
        var toggle = document.getElementsByClassName('wp-block-image');

        // function switchText() {
        //     let text = document.getElementsByTagName('figcaption');
        //     console.log('text', text);
        //     console.log('text.length', text.length);
        //     for (var j = 0 ; j < text.length; j++) {
        //         text[j].classList.add("wp-block-image-notShow");
        //         console.log('text[0].class: ', text[j].class);
        //         text[j].class = (text[j].class == "wp-block-image-notShow") ? "wp-block-image-show" : "wp-block-image-notShow";
        //         if(text[j].class == "wp-block-image-notShow"){
        //             text[j].classList.add("wp-block-image-show");
        //             text[j].classList.remove("wp-block-image-notShow");
        //         } else {
        //             text[j].classList.add("wp-block-image-notShow");
        //             text[j].classList.remove("wp-block-image-show");
        //         }
        //     }
        // }

        // for (var i = 0 ; i < toggle.length; i++) {
        //     toggle[i].setAttribute("id", "photo-"+i);
        //     var photoID = document.getElementById("photo-"+i);
        //     // console.log('photoID: ', photoID);
        //     // photoID.addEventListener('click' , switchText(i) , false ); 
        //     photoID.addEventListener("click", function(){
        //         switchText(i);
        //     }, false);
        //     // toggle[i].addEventListener('click' , switchText , false ); 
        //     // console.log('toggle[i]: ', toggle[i]);
        // }


        for (var i = 0 ; i < toggle.length; i++) {
            toggle[i].setAttribute("id", "photo-"+i);
            toggle[i].addEventListener('click',function(){
                switchText(this.id);
            });
        }


        function switchText(photoID) {
            // console.log('zdjecia id:', photoID);
            let text = document.getElementsByTagName('figcaption');
            for (var j = 0 ; j < text.length; j++) {
                text[j].setAttribute("id", "ID"+j);
                text[j].classList.add("wp-block-image-notShow");
                if(photoID == 'photo-'+j) {
                    text[j].class = (text[j].class == "wp-block-image-notShow") ? "wp-block-image-show" : "wp-block-image-notShow";
                    if(text[j].class == "wp-block-image-notShow"){
                        text[j].classList.add("wp-block-image-show");
                        text[j].classList.remove("wp-block-image-notShow");
                    } else {
                        text[j].classList.add("wp-block-image-notShow");
                        text[j].classList.remove("wp-block-image-show");
                    }
                }
            }
        }
        
    </script>

    <?php wp_footer() ?>
</body>

</html>