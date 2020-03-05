Vue.component('product', {
    props: ['name','description'],
    template: '<a href = "product-view.php?pid = {{productid}}"><div class = "items-card"><div class = "items-card-image"></div><p class = "name">{{name}}</p><p>{{description}}</p></div></a>'
});

new Vue({

    el:'#root',
    data: {
        items:[
        
            
        ]
    }

 })