Vue.component('mproduct', {
    props: ['item'],
    template: '<div class = "mcard"><div class = "mcard-image"></div><div class = "mcard-text"><p class = "name">{{item.company}}<br>{{item.name}}</p><p>{{item.description}}</p><h4>COLOR : {{item.color}}</h4><br><h4>CAPACITY : {{item.capacity}}</h4><br><h4>DIMENSIONS : {{item.dimensions}}</h4><br><h4>PACKAGE : {{item.packag}}</h4></div></div>'
});

new Vue({

    el:'#root',
    data: {
        items:[
            {company : "SURYA",name: "Item-name",description : "Here Lies the product description.Here Lies the product description.Here Lies the product description.Here Lies the product description.",color:"red",capacity:"Here lies the capacity description",dimensions:"0 X 0 X 0",packag:"Package-description"}
        ]
    }

 })