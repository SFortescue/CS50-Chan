 $(document).ready(function() {

function quote(text){
    var TheTextBox = document.getElementById("textBox");
    TheTextBox.value = TheTextBox.value + text;

}

            $('div.postContainer > div:nth-child(1) > span:nth-child(4) > span:nth-child(1)').hover(
				
               function () {
                  $(this).css({"color":"#DD0000"});
				//	quote("HEEEEEY");
               }, 
				
               function () {
                  $(this).css({"color":"black"});
               }
            );


            $('div.postContainer > div:nth-child(1) > span:nth-child(4) > span:nth-child(1)').click(
				
               function () {
					var text = ">>" + this.innerHTML + "\n";
					quote(text);
               }
            );

         });


