$(document).ready(function(){
    var clients = [
        { "Nombre": "Otto Clay", "Edad": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
        { "Nombre": "Connor Johnston", "Edad": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
        { "Nombre": "Lacey Hess", "Edad": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
        { "Nombre": "Timothy Henson", "Edad": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
        { "Nombre": "Ramona Benton", "Edad": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
    ];
    
    var countries = [
        { Name: "", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 }
    ];
    
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "400px",
    
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
    
        data: clients,
    
        fields: [
            { name: "Nombre", type: "text", width: 150, validate: "required" },
            { name: "Edad", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
            { type: "control" }
        ]
    });
});