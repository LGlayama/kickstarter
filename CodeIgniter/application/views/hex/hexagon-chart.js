var hexagon = {
    bg_default_color: '#99ccff',
    value_default_color: '#FF8C00',
    x_offset: 30,
    ssin: function(degree) {
        return Math.sin(degree * Math.PI / 180);
    },
    init: function(id, side_length, names, color) {
        this.side_length = side_length;
        this.hexagon = document.getElementById(id);
        this.hexagon.width = this.side_length * 2  + this.x_offset * 2;
        this.hexagon.height = this.side_length * 2;

        var width = this.hexagon.width;
        var height = this.hexagon.height;
        var S = this.x_offset;

        if (typeof (color) === 'undefined') {
            color = this.bg_default_color;
        }

        hexagoncontext = this.hexagon.getContext('2d');
        hexagoncontext.fillStyle = color;
        hexagoncontext.strokeStyle = color;
        hexagoncontext.setLineDash([25,5]);

        hexagoncontext.beginPath();
        hexagoncontext.moveTo(width/2,0);
        hexagoncontext.lineTo(width/2+(width/2-S)*this.ssin(45), height/2-(width/2-S)*this.ssin(45));
        hexagoncontext.lineTo(width-S, height/2);
        hexagoncontext.lineTo(width/2+(width/2-S)*this.ssin(45), height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.lineTo(width/2,height);
        hexagoncontext.lineTo(width/2-(width/2-S)*this.ssin(45), height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.lineTo(S, height/2);
        hexagoncontext.lineTo(width/2-(width/2-S)*this.ssin(45), height/2-(width/2-S)*this.ssin(45));
        hexagoncontext.lineTo(width/2,0);

        hexagoncontext.moveTo((width/2)*3/4+width/8,height/8);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*3/4+width/8, (height/2-(width/2-S)*this.ssin(45))*3/4+height/8);
        hexagoncontext.lineTo((width-S)*3/4+width/8, (height/2)*3/4+height/8);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*3/4+width/8, (height/2+(width/2-S)*this.ssin(45))*3/4+height/8);
        hexagoncontext.lineTo((width/2)*3/4+width/8,(height)*3/4+height/8);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*3/4+width/8, (height/2+(width/2-S)*this.ssin(45))*3/4+height/8);
        hexagoncontext.lineTo((S)*3/4+width/8, (height/2)*3/4+height/8);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*3/4+width/8, (height/2-(width/2-S)*this.ssin(45))*3/4+height/8);
        hexagoncontext.lineTo((width/2)*3/4+width/8,height/8);
        hexagoncontext.stroke();

        hexagoncontext.moveTo((width/2)*1/2+width/4,0+height/4);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*1/2+width/4, (height/2-(width/2-S)*this.ssin(45))*1/2+height/4);
        hexagoncontext.lineTo((width-S)*1/2+width/4, (height/2)*1/2+height/4);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*1/2+width/4, (height/2+(width/2-S)*this.ssin(45))*1/2+height/4);
        hexagoncontext.lineTo((width/2)*1/2+width/4,(height)*1/2+height/4);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*1/2+width/4, (height/2+(width/2-S)*this.ssin(45))*1/2+height/4);
        hexagoncontext.lineTo((S)*1/2+width/4, (height/2)*1/2+height/4);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*1/2+width/4, (height/2-(width/2-S)*this.ssin(45))*1/2+height/4);
        hexagoncontext.lineTo((width/2)*1/2+width/4,0+height/4);


        hexagoncontext.moveTo((width/2)*1/4+width*3/8,0+height*3/8);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*1/4+width*3/8, (height/2-(width/2-S)*this.ssin(45))*1/4+height*3/8);
        hexagoncontext.lineTo((width-S)*1/4+width*3/8, (height/2)*1/4+height*3/8);
        hexagoncontext.lineTo((width/2+(width/2-S)*this.ssin(45))*1/4+width*3/8, (height/2+(width/2-S)*this.ssin(45))*1/4+height*3/8);
        hexagoncontext.lineTo((width/2)*1/4+width*3/8,(height)*1/4+height*3/8);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*1/4+width*3/8, (height/2+(width/2-S)*this.ssin(45))*1/4+height*3/8);
        hexagoncontext.lineTo((S)*1/4+width*3/8, (height/2)*1/4+height*3/8);
        hexagoncontext.lineTo((width/2-(width/2-S)*this.ssin(45))*1/4+width*3/8, (height/2-(width/2-S)*this.ssin(45))*1/4+height*3/8);
        hexagoncontext.lineTo((width/2)*1/4+width*3/8,0+height*3/8);

        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2+(width/2-S)*this.ssin(45), height/2-(width/2-S)*this.ssin(45));
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width-S, height/2);
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2+(width/2-S)*this.ssin(45), height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2,height);
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2-(width/2-S)*this.ssin(45), height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(S, height/2);
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2-(width/2-S)*this.ssin(45), height/2-(width/2-S)*this.ssin(45));
        hexagoncontext.moveTo(width/2,height/2);
        hexagoncontext.lineTo(width/2,0);


        hexagoncontext.stroke();

       
        hexagoncontext.fillText(names[0], width / 2 + S , 10);
        hexagoncontext.fillText(names[1], width/2+(width/2-S)*this.ssin(45)+ S, height/2-(width/2-S)*this.ssin(45));
        hexagoncontext.fillText(names[2], width-S*2/3, height/2);
        hexagoncontext.fillText(names[3], width/2+(width/2-S)*this.ssin(45)+ S, height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.fillText(names[4], width/2+ S,height);
        hexagoncontext.fillText(names[5], width/2-(width/2-S)*this.ssin(45)- S, height/2+(width/2-S)*this.ssin(45));
        hexagoncontext.fillText(names[6], S/3, height/2);
        hexagoncontext.fillText(names[7], width/2-(width/2-S)*this.ssin(45)- S, height/2-(width/2-S)*this.ssin(45));
    },
    draw: function(values, color) {
        if (values.length < 8) {
            return false;
        }

        for (i in values) {
            values[i] = parseFloat(values[i]);

            if (values[i] > 1 || values[i] < 0) {
                return false;
            }
        }

        if (typeof (color) === 'undefined') {
            color = this.value_default_color;
        }

        var width = this.hexagon.width;
        var L = this.side_length;
        var S = this.x_offset;
        var V = values;

        hexagoncontext = this.hexagon.getContext('2d');
        hexagoncontext.fillStyle = color;
        hexagoncontext.strokeStyle = color;
       	hexagoncontext.setLineDash([])
        hexagoncontext.beginPath();
        hexagoncontext.moveTo(width / 2, L * (1 - V[0]));
        hexagoncontext.lineTo(this.ssin(45) * L *V[1] + width / 2, L-this.ssin(45) * L *V[1]);
        hexagoncontext.lineTo(width / 2+L*V[2],L);
        hexagoncontext.lineTo(this.ssin(45) * L *V[3] + width / 2, L+this.ssin(45) * L *V[3]);
        hexagoncontext.lineTo(width / 2, L * (1 + V[4]));
        hexagoncontext.lineTo(width / 2-this.ssin(45) * L *V[5] , L+this.ssin(45) * L *V[5]); 
        hexagoncontext.lineTo(width / 2-L*V[6],L);
        hexagoncontext.lineTo(width / 2-this.ssin(45) * L *V[7], L-this.ssin(45) * L *V[7]);
        hexagoncontext.lineTo(width / 2, L * (1 - V[0]));               
        hexagoncontext.stroke();
        
    }
};