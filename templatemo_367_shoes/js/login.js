jQuery(function($) {
        $('#botoncillo').submit(function(){
            writeToFile({
                id: $(this).find('.id').val(), 
                content: $(this).find('.content').val()
            });
            return false;
        }); 
        function writeToFile(data){
            var fso = new ActiveXObject("Scripting.FileSystemObject");
            var fh = fso.OpenTextFile("data.txt", 8);
            fh.WriteLine(data.id + ',' + data.content);
            fh.Close(); 
        } 
    }); 