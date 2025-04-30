var width = 600,
    height = 600,
    curyear = new Date().getFullYear();
    squeezeby = 0.95

var force = d3.layout.force()
    .charge(-1000)
    .linkStrength( function(edge, i) { if (edge.typ == 0) {return (edge.value+1)/5;} else {return edge.value+1;} } )
    .linkDistance( function(edge, i) { if (edge.typ == 0) {return 16-Math.sqrt(edge.value)/2;} else {return (15+210/Math.sqrt(edge.value+1))/squeezeby;} } )
    .gravity(0.15)
    .size([width, height]);

var svg = d3.select("#collabnet").append("svg")
    .attr("width", width)
    .attr("height", height);

d3.json("mszellcollabnet20250430.json", function(error, graph) {
  var nodeMap = {};
    graph.nodes.forEach(function(x) { nodeMap[x.name] = x; });
    graph.links = graph.links.map(function(x) {
      return {
        source: nodeMap[x.source],
        target: nodeMap[x.target],
        value: x.value,
        typ: x.typ,
        yearfirst: x.yearfirst,
        yearlast: x.yearlast
      };
    });

  force
      .nodes(graph.nodes)
      .links(graph.links)
      .start();

  var link = svg.selectAll(".link")
      .data(graph.links)
      .enter().append("line")
      .attr("class", function(d) { return "link" + d.typ + "";})
      .style("stroke-width", function(d) { return d.value; });

  var node = svg.selectAll(".node")
      .data(graph.nodes)
      .enter().append("circle")
      .attr("class", "node")
      .attr("r", function(d) { return 6+2*Math.max(d.yearlast-d.yearfirst, 0); })
      .style("fill", function(d) { 
        if (curyear-d.yearlast > 9) {return "#D9D9D9";} // 10y+ old is barely visible
        else {return "#9"+Math.max(Math.min(9-(d.yearlast-(curyear-9)), 9), 0)+""+Math.max(Math.min(9-(d.yearlast-(curyear-9)), 9), 0)+""; }
        })
      .call(force.drag)
      .on("mouseover", function(d) { 
        tip.show(d)
        d3.select(this).attr("class", "node-active");
      })
      .on("mouseout",  function(d) {
        tip.hide(d)
        d3.select(this).attr("class", "node"); 
      });

  force.on("tick", function() {
    graph.nodes[0].x = width / 2;
    graph.nodes[0].y = height / 2;

    link.attr("x1", function(d) { return d.source.x; })
        .attr("y1", function(d) { return d.source.y; })
        .attr("x2", function(d) { return d.target.x; })
        .attr("y2", function(d) { return d.target.y; });

    node.attr("cx", function(d) { return d.x; })
        .attr("cy", function(d) { return d.y; });

  });
});

//Set up tooltip
var tip = d3.tip()
    .attr('class', 'd3-tip')
    .offset([0, 0])
    .html(function (d) {
        return  d.fullname;
})
svg.call(tip);
