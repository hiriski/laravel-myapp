import { isTemplate } from '../routes_function';

if(isTemplate) {
    var extendFaq = function() {
        var faq = document.querySelector("#faqContent > div");
    };

    for (var    i = 0,
                faq = document.querySelectorAll("#faqContent > div"),
                faqLength = faq.length;
                i < faq.length; i++) {
                
                faq[i].addEventListener("click", function(){
                    this.setAttribute("data-faq", "expand");
                });
            
    }
}