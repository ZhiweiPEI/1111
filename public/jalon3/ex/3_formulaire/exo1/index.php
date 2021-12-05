<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <div id="users">
            <div id="user1">
                <h4>User1</h4>
                <p id="user1content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="modify">Modify Comment</button>
                <!-- <button class="remove">Remove Comment</button> -->
            </div>
            <div id="user2">
                <h4>User2</h4>
                <p id="user2content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="modify">Modify Comment</button>
                <!-- <button class="remove">Remove Comment</button> -->
            </div>
            <div id="user3">
                <h4>User3</h4>
                <p id="user3content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <button class="modify">Modify Comment</button>
                <!-- <button class="remove">Remove Comment</button> -->
            </div>
        </div>
        <button id="addNew">Add new Comment</button>
        <form action="#" id="myForm" name="myForm" style="visibility: hidden;">
            <textarea name="newComment" id="newComment" cols="50" rows="10" style="resize: none;" placeholder="..." value=""></textarea>
            <input type="submit" value="submit" id="myFormSubmit" disabled="disabled">
        </form>
    </body>
    <script src="./index.js"></script>
</html>