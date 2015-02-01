<script>

<?php if ( !is_null($dog->mmmm) ) { ?>

var treeData = [
  {
    "name": "{{ $dog->breed }}",
    "parent": "null",
    "children": [
      {
        "name": "{{ $dog->m }}",
        "parent": "null",
        "children": [
          {
            "name": "{{ $dog->mm }}",
            "parent": "{{ $dog->m }}",
            "children": [
              {
                "name": "{{ $dog->mmm }}",
                "parent": "{{ $dog->mm }}",
                "children": [
                  {
                    "name": "{{ $dog->mmmm }}",
                    "parent": "{{ $dog->mmm }}"
                  },
                  {
                    "name": "{{ $dog->mmmd }}",
                    "parent": "{{ $dog->mmm }}"
                  }
                ]
              },
              {
                "name": "{{ $dog->mmd }}",
                "parent": "{{ $dog->mm }}",
                "children": [
                  {
                    "name": "{{ $dog->mmdm }}",
                    "parent": "{{ $dog->mmd }}"
                  },
                  {
                    "name": "{{ $dog->mmdd }}",
                    "parent": "{{ $dog->mmd }}"
                  }
                ]
              }
            ]
          },
          {
            "name": "{{ $dog->md }}",
            "parent": "{{ $dog->m }}",
            "children": [
              {
                "name": "{{ $dog->mdm }}",
                "parent": "{{ $dog->md }}",
                "children": [
                  {
                    "name": "{{ $dog->mddm }}",
                    "parent": "{{ $dog->mdd }}"
                  },
                  {
                    "name": "{{ $dog->mddd }}",
                    "parent": "{{ $dog->mdd }}"
                  }
                ]
              },
              {
                "name": "{{ $dog->mdd }}",
                "parent": "{{ $dog->md }}",
                "children": [
                  {
                    "name": "{{ $dog->mddm }}",
                    "parent": "{{ $dog->mdd }}"
                  },
                  {
                    "name": "{{ $dog->mddd }}",
                    "parent": "{{ $dog->mdd }}"
                  }
                ]
              }
            ]
          }
        ]
      },
      {
        "name": "{{ $dog->d }}",
        "parent": "null",
        "children": [
          {
            "name": "{{ $dog->dm }}",
            "parent": "{{ $dog->d }}",
            "children": [
              {
                "name": "{{ $dog->dmm }}",
                "parent": "{{ $dog->dm }}",
                "children": [
                  {
                    "name": "{{ $dog->dmmm }}",
                    "parent": "{{ $dog->dmm }}"
                  },
                  {
                    "name": "{{ $dog->dmmd }}",
                    "parent": "{{ $dog->dmm }}"
                  }
                ]
              },
              {
                "name": "{{ $dog->dmd }}",
                "parent": "{{ $dog->dm }}",
                "children": [
                  {
                    "name": "{{ $dog->dmdm }}",
                    "parent": "{{ $dog->dmd }}"
                  },
                  {
                    "name": "{{ $dog->dmdd }}",
                    "parent": "{{ $dog->dmd }}"
                  }
                ]
              }
            ]
          },
          {
            "name": "{{ $dog->dd }}",
            "parent": "{{ $dog->d }}",
            "children": [
              {
                "name": "{{ $dog->ddm }}",
                "parent": "{{ $dog->dd }}",
                "children": [
                  {
                    "name": "{{ $dog->dddm }}",
                    "parent": "{{ $dog->ddd }}"
                  },
                  {
                    "name": "{{ $dog->dddd }}",
                    "parent": "{{ $dog->ddd }}"
                  }
                ]
              },
              {
                "name": "{{ $dog->ddd }}",
                "parent": "{{ $dog->dd }}",
                "children": [
                  {
                    "name": "{{ $dog->dddm }}",
                    "parent": "{{ $dog->ddd }}"
                  },
                  {
                    "name": "{{ $dog->dddd }}",
                    "parent": "{{ $dog->ddd }}"
                  }
                ]
              }
            ]
          }
        ]
      }
    ]
  }
];

<?php } else { ?>

var treeData = [
  {
    "name": "{{ $dog->breed }}",
    "parent": "null",
    "children": [
      {
        "name": "{{ $dog->m }}",
        "parent": "null",
        "children": [
          {
            "name": "{{ $dog->mm }}",
            "parent": "{{ $dog->m }}",
            "children": [
              {
                "name": "{{ $dog->mmm }}",
                "parent": "{{ $dog->mm }}"
              },
              {
                "name": "{{ $dog->mmd }}",
                "parent": "{{ $dog->mm }}"
              }
            ]
          },
          {
            "name": "{{ $dog->md }}",
            "parent": "{{ $dog->m }}",
            "children": [
              {
                "name": "{{ $dog->mdm }}",
                "parent": "{{ $dog->md }}"
              },
              {
                "name": "{{ $dog->mdd }}",
                "parent": "{{ $dog->md }}"
              }
            ]
          }
        ]
      },
      {
        "name": "{{ $dog->d }}",
        "parent": "null",
        "children": [
          {
            "name": "{{ $dog->dm }}",
            "parent": "{{ $dog->d }}",
            "children": [
              {
                "name": "{{ $dog->dmm }}",
                "parent": "{{ $dog->dm }}"
              },
              {
                "name": "{{ $dog->dmd }}",
                "parent": "{{ $dog->dm }}"
              }
            ]
          },
          {
            "name": "{{ $dog->dd }}",
            "parent": "{{ $dog->d }}",
            "children": [
              {
                "name": "{{ $dog->ddm }}",
                "parent": "{{ $dog->dd }}"
              },
              {
                "name": "{{ $dog->ddd }}",
                "parent": "{{ $dog->dd }}"
              }
            ]
          }
        ]
      }
    ]
  }
];


<?php } ?>

<?php if ( !is_null($dog->mmmm) ) { ?>
  var treeWidth = 1250;
  var marginLeft = 220;

<?php } else { ?>
  var treeWidth = 1000;
  var marginLeft = 180;

<?php } ?>

// ************** Generate the tree diagram  *****************
var margin = {top: 20, right: 0, bottom: 20, left: marginLeft},
  width = treeWidth - margin.right - margin.left,
  height = 500 - margin.top - margin.bottom;
  
var i = 0;

var tree = d3.layout.tree()
  .size([height, width]);

var diagonal = d3.svg.diagonal()
  .projection(function(d) { return [d.y, d.x]; });

var svg = d3.select("#pedigree-tree").append("svg")
  .attr("width", width + margin.right + margin.left)
  .attr("height", height + margin.top + margin.bottom)
  .append("g")
  .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

root = treeData[0];
  
update(root);

function update(source) {

  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
    links = tree.links(nodes);

  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = d.depth * 180; });

  // Declare the nodes…
  var node = svg.selectAll("g.node")
    .data(nodes, function(d) { return d.id || (d.id = ++i); });

  // Enter the nodes.
  var nodeEnter = node.enter().append("g")
    .attr("class", "node")
    .attr("transform", function(d) { 
      return "translate(" + d.y + "," + d.x + ")"; });

  nodeEnter.append("circle")
    .attr("r", 4)
    .style("fill", "#fff");

  nodeEnter.append("text")
    .attr("x", function(d) { 
      return d.children || d._children ? -13 : 13; })
    .attr("dy", ".35em")
    .attr("text-anchor", function(d) { 
      return d.children || d._children ? "end" : "start"; })
    .text(function(d) { return d.name; })
    .style("fill-opacity", 1);

  // Declare the links…
  var link = svg.selectAll("path.link")
    .data(links, function(d) { return d.target.id; });

  // Enter the links.
  link.enter().insert("path", "g")
    .attr("class", "link")
    .attr("d", diagonal);

}

</script>