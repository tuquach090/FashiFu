const app = {
    handleContactUs(){
        $('.contactUs__header img').click(function(){
            $('.contactUs').toggleClass('active');
        })
    }
}

app.handleContactUs();