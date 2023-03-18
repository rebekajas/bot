jQuery(document).ready(function($) {
    // Toggle the chatbot window when the dot is clicked
    $('.wp-chatbot-dot').on('click', function() {
        $('.wp-chatbot-window').toggle();
    });



    // Handle user input and display chatbot responses
    $('#chatbot-input').keypress(function(event) {
        if (event.which == 13) {
            event.preventDefault();
            var userMessage = $(this).val();
            $('#chatbot-messages').append('<div class="chatbot-message chatbot-message-user">' + userMessage + '</div>');
            $(this).val('');
            if (userMessage.toLowerCase().includes('hello')) {
                var botMessage = 'Hi there! How can I help you today?';
            } else if (userMessage.toLowerCase().includes('weather')) {
                var botMessage = 'The weather is fine today.';
            } else {
                var botMessage = 'I\'m sorry, I didn\'t understand what you meant.';
            }
            $('#chatbot-messages').append('<div class="chatbot-message chatbot-message-bot">' + botMessage + '</div>');
        }
    });
});
