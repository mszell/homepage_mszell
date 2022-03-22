var width = 600,
    height = 600,
    curyear = new Date().getFullYear();

var force = d3.layout.force()
    .charge(-1300)
    .linkStrength( function(edge, i) { if (edge.typ == 0) {return (edge.value+0.5)/4.5;} else {return edge.value+0.8;} } )
    .linkDistance( function(edge, i) { if (edge.typ == 0) {return 16-Math.sqrt(edge.value)/2;} else {return 15+210/Math.sqrt(edge.value+0.8);} } )
    .gravity(0.1)
    .size([width, height]);

var svg = d3.select("#collabnet").append("svg")
    .attr("width", width)
    .attr("height", height);

d3.json("mszellcollabnet20220320.json", function(error, graph) {
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
      .style("fill", function(d) { return "#9"+Math.max(Math.min(9-(d.yearlast-(curyear-9)), 9), 0)+""+Math.max(Math.min(9-(d.yearlast-(curyear-9)), 9), 0)+""; })
      .call(force.drag)
      .on('mouseover', tip.show) //Added
      .on('mouseout', tip.hide); //Added

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
