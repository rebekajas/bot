<?php
/*
Plugin Name: Naujas Botas
Description: A simple chatbot plugin for WordPress
*/

// Add the necessary scripts
function wp_chatbot_scripts() {
    wp_enqueue_style( 'wp-chatbot-style', plugin_dir_url( __FILE__ ) . 'style.css' );
    wp_enqueue_script( 'wp-chatbot-script', plugin_dir_url( __FILE__ ) . 'script.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'wp_chatbot_scripts' );

// Add the chatbot HTML markup
function wp_chatbot_html() {
    ?>
 <div class="wp-chatbot-container">
        <div class="wp-chatbot-dot"></div>
        <div class="wp-chatbot-window">
            <div class="wp-chatbot-header">
                <h3>Chatbot</h3>
            </div>
            <div id="chatbot-messages" class="wp-chatbot-body">
                <div class="chatbot-message chatbot-message-bot">Hi there! How can I help you today?</div>
            </div>
            <div class="wp-chatbot-input-container">
                <input type="text" id="chatbot-input" class="wp-chatbot-input" placeholder="Type your message here...">
            </div>
        </div>
    </div>
    <?php
}
add_action( 'wp_footer', 'wp_chatbot_html' );