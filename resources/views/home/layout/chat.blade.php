<div id="body">
    @push('styles')
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    @endpush
    <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <span class="fas fa-comments" style="font-size: 25px"></span>
    </div>

    <div class="chat-box">
        <div class="chat-box-header">
            Message to Seller
            <span class="chat-box-toggle">  <span class="fas fa-times"></span></span>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-overlay">
            </div>
            <div class="chat-logs">

            </div>
            <!--chat-log -->
        </div>
        <div class="chat-input">
            <form>
                <input type="text" id="chat-input" placeholder="Send a message..." />
                <button type="submit" class="chat-submit" id="chat-submit"> <span class="fas fa-paper-plane" style="font-size: 16px"></span></button>
            </form>
        </div>
    </div>




</div>
