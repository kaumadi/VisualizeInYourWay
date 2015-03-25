<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>




<!-- uncomment the next line here and in xlsxworker.js for encoding support -->
<!--<script src="dist/cpexcel.js"></script>-->

<script src="<?php echo base_url(); ?>application_resources/js/parser/shim.js"></script>
<script src="<?php echo base_url(); ?>application_resources/js/parser/jszip.js"></script>
<script src="<?php echo base_url(); ?>application_resources/js/parser/xlsx.js"></script>
<!-- uncomment the next line here and in xlsxworker.js for ODS support -->
<script src="<?php echo base_url(); ?>application_resources/js/parser/ods.js"></script>
<link href="<?php echo base_url(); ?>application_resources/css/drop.css" rel="stylesheet" type="text/css"/>

Output Format:
<select name="format">
   <!--<option value="csv" selected=""> CSV</option>-->
    <option value="json"> JSON</option>
    <!--<option value="form"> FORMULAE</option>-->
</select><br>
<!--<input type="radio" name="format" value="csv" checked> CSV<br>
<input type="radio" name="format" value="json"> JSON<br>
<input type="radio" name="format" value="form"> FORMULAE<br> -->

<div id="drop" class="default">Drop an XLSX / XLSM / XLSB / ODS file here to see sheet data</div>
<!--<p><input type="file" name="xlfile" id="xlf"> ... or click here to select a file</p>
<textarea id="b64data">... or paste a base64-encoding here</textarea>-->
<input type="button" id="dotext" value="Click here to process the base64 text" onclick="b64it();"><br>
Advanced Demo Options: <br>
Use Web Workers: (when available) <input type="checkbox" name="useworker" checked=""><br>
Use Transferrables: (when available) <input type="checkbox" name="xferable" checked=""><br>
Use readAsBinaryString: (when available) <input type="checkbox" name="userabs" checked=""><br>
<pre id="out"></pre>
<!--<input id="btn" type="button" value="Generate Graph"/>-->
<!--<script>
    $('#btn').click(function() {

        var json = $('#out').val();
        var w = 600;
        var h = 250;

        var dataset = json;

        var xScale = d3.scale.ordinal()
                .domain(d3.range(dataset.length))
                .rangeRoundBands([0, w], 0.05);

        var yScale = d3.scale.linear()
                .domain([0, d3.max(dataset, function(d) {
                        return d.value;
                    })])
                .range([0, h]);

        var key = function(d) {
            return d.key;
        };

//Create SVG element
        var svg = d3.select("body")
                .append("svg")
                .attr("width", w)
                .attr("height", h);

//Create bars
        svg.selectAll("rect")
                .data(dataset, key)
                .enter()
                .append("rect")
                .attr("x", function(d, i) {
                    return xScale(i);
                })
                .attr("y", function(d) {
                    return h - yScale(d.value);
                })
                .attr("width", xScale.rangeBand())
                .attr("height", function(d) {
                    return yScale(d.value);
                })
                .attr("fill", function(d) {
                    return "rgb(0, 0, " + (d.value * 10) + ")";
                })

                //Tooltip
                .on("mouseover", function(d) {
                    //Get this bar's x/y values, then augment for the tooltip
                    var xPosition = parseFloat(d3.select(this).attr("x")) + xScale.rangeBand() / 2;
                    var yPosition = parseFloat(d3.select(this).attr("y")) + 14;

                    //Update Tooltip Position & value
                    d3.select("#tooltip")
                            .style("left", xPosition + "px")
                            .style("top", yPosition + "px")
                            .select("#value")
                            .text(d.value);
                    d3.select("#tooltip").classed("hidden", false)
                })
                .on("mouseout", function() {
                    //Remove the tooltip
                    d3.select("#tooltip").classed("hidden", true);
                });

//Create labels
        svg.selectAll("text")
                .data(dataset, key)
                .enter()
                .append("text")
                .text(function(d) {
                    return d.value;
                })
                .attr("text-anchor", "middle")
                .attr("x", function(d, i) {
                    return xScale(i) + xScale.rangeBand() / 2;
                })
                .attr("y", function(d) {
                    return h - yScale(d.value) + 14;
                })
                .attr("font-family", "sans-serif")
                .attr("font-size", "11px")
                .attr("fill", "white");

        var sortOrder = false;
        var sortBars = function() {
            sortOrder = !sortOrder;

            sortItems = function(a, b) {
                if (sortOrder) {
                    return a.value - b.value;
                }
                return b.value - a.value;
            };

            svg.selectAll("rect")
                    .sort(sortItems)
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .attr("x", function(d, i) {
                        return xScale(i);
                    });

            svg.selectAll('text')
                    .sort(sortItems)
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .text(function(d) {
                        return d.value;
                    })
                    .attr("text-anchor", "middle")
                    .attr("x", function(d, i) {
                        return xScale(i) + xScale.rangeBand() / 2;
                    })
                    .attr("y", function(d) {
                        return h - yScale(d.value) + 14;
                    });
        };
// Add the onclick callback to the button
        d3.select("#sort").on("click", sortBars);
        d3.select("#reset").on("click", reset);
        function randomSort() {


            svg.selectAll("rect")
                    .sort(sortItems)
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .attr("x", function(d, i) {
                        return xScale(i);
                    });

            svg.selectAll('text')
                    .sort(sortItems)
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .text(function(d) {
                        return d.value;
                    })
                    .attr("text-anchor", "middle")
                    .attr("x", function(d, i) {
                        return xScale(i) + xScale.rangeBand() / 2;
                    })
                    .attr("y", function(d) {
                        return h - yScale(d.value) + 14;
                    });
        }
        function reset() {
            svg.selectAll("rect")
                    .sort(function(a, b) {
                        return a.key - b.key;
                    })
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .attr("x", function(d, i) {
                        return xScale(i);
                    });

            svg.selectAll('text')
                    .sort(function(a, b) {
                        return a.key - b.key;
                    })
                    .transition()
                    .delay(function(d, i) {
                        return i * 50;
                    })
                    .duration(1000)
                    .text(function(d) {
                        return d.value;
                    })
                    .attr("text-anchor", "middle")
                    .attr("x", function(d, i) {
                        return xScale(i) + xScale.rangeBand() / 2;
                    })
                    .attr("y", function(d) {
                        return h - yScale(d.value) + 14;
                    });
        }
        ;

    });
</script>-->

<br>

<script>
    var rABS = typeof FileReader !== "undefined" && typeof FileReader.prototype !== "undefined" && typeof FileReader.prototype.readAsBinaryString !== "undefined";
    if (!rABS) {
        document.getElementsByName("userabs")[0].disabled = true;
        document.getElementsByName("userabs")[0].checked = false;
    }

    var use_worker = typeof Worker !== 'undefined';
    if (!use_worker) {
        document.getElementsByName("useworker")[0].disabled = true;
        document.getElementsByName("useworker")[0].checked = false;
    }

    var transferable = use_worker;
    if (!transferable) {
        document.getElementsByName("xferable")[0].disabled = true;
        document.getElementsByName("xferable")[0].checked = false;
    }

    var wtf_mode = false;

    function fixdata(data) {
        var o = "", l = 0, w = 10240;
        for (; l < data.byteLength / w; ++l)
            o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w + w)));
        o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
        return o;
    }

    function ab2str(data) {
        var o = "", l = 0, w = 10240;
        for (; l < data.byteLength / w; ++l)
            o += String.fromCharCode.apply(null, new Uint16Array(data.slice(l * w, l * w + w)));
        o += String.fromCharCode.apply(null, new Uint16Array(data.slice(l * w)));
        return o;
    }

    function s2ab(s) {
        var b = new ArrayBuffer(s.length * 2), v = new Uint16Array(b);
        for (var i = 0; i != s.length; ++i)
            v[i] = s.charCodeAt(i);
        return [v, b];
    }

    function xlsxworker_noxfer(data, cb) {
        var worker = new Worker('<?php echo base_url(); ?>application_resources/js/parser/xlsxworker.js');
        worker.onmessage = function(e) {
            switch (e.data.t) {
                case 'ready':
                    break;
                case 'e':
                    console.error(e.data.d);
                    break;
                case 'xlsx':
                    cb(JSON.parse(e.data.d));
                    break;
            }
        };
        var arr = rABS ? data : btoa(fixdata(data));
        worker.postMessage({d: arr, b: rABS});
    }

    function xlsxworker_xfer(data, cb) {
        var worker = new Worker('<?php echo base_url(); ?>application_resources/js/parser/xlsxworker2.js');
        worker.onmessage = function(e) {
            switch (e.data.t) {
                case 'ready':
                    break;
                case 'e':
                    console.error(e.data.d);
                    break;
                default:
                    xx = ab2str(e.data).replace(/\n/g, "\\n").replace(/\r/g, "\\r");
                    console.log("done");
                    cb(JSON.parse(xx));
                    break;
            }
        };
        if (rABS) {
            var val = s2ab(data);
            worker.postMessage(val[1], [val[1]]);
        } else {
            worker.postMessage(data, [data]);
        }
    }

    function xlsxworker(data, cb) {
        transferable = document.getElementsByName("xferable")[0].checked;
        if (transferable)
            xlsxworker_xfer(data, cb);
        else
            xlsxworker_noxfer(data, cb);
    }

    function get_radio_value(radioName) {
        var radios = document.getElementsByName(radioName);
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked || radios.length === 1) {
                return radios[i].value;
            }
        }
    }

    function to_json(workbook) {
        var result = {};
        workbook.SheetNames.forEach(function(sheetName) {
            var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            if (roa.length > 0) {
                result[sheetName] = roa;
            }
        });
        return result;
    }

    function to_csv(workbook) {
        var result = [];
        workbook.SheetNames.forEach(function(sheetName) {
            var csv = XLSX.utils.sheet_to_csv(workbook.Sheets[sheetName]);
            if (csv.length > 0) {
                result.push("SHEET: " + sheetName);
                result.push("");
                result.push(csv);
            }
        });
        return result.join("\n");
    }

    function to_formulae(workbook) {
        var result = [];
        workbook.SheetNames.forEach(function(sheetName) {
            var formulae = XLSX.utils.get_formulae(workbook.Sheets[sheetName]);
            if (formulae.length > 0) {
                result.push("SHEET: " + sheetName);
                result.push("");
                result.push(formulae.join("\n"));
            }
        });
        return result.join("\n");
    }

    var tarea = document.getElementById('b64data');
    function b64it() {
        if (typeof console !== 'undefined')
            console.log("onload", new Date());
        var wb = XLSX.read(tarea.value, {type: 'base64', WTF: wtf_mode});
        process_wb(wb);
    }

    function process_wb(wb) {
        var output = "";
        switch (get_radio_value("format")) {
            case "json":
                output = JSON.stringify(to_json(wb), 2, 2);
                break;
            case "form":
                output = to_formulae(wb);
                break;
            default:
                output = to_csv(wb);
        }
        if (out.innerText === undefined)
            out.textContent = output;
        else
            out.innerText = output;
        if (typeof console !== 'undefined')
            console.log("output", new Date());
    }

    var drop = document.getElementById('drop');
    function handleDrop(e) {
        e.stopPropagation();
        e.preventDefault();
        rABS = document.getElementsByName("userabs")[0].checked;
        use_worker = document.getElementsByName("useworker")[0].checked;
        var files = e.dataTransfer.files;
        var i, f;
        for (i = 0, f = files[i]; i != files.length; ++i) {
            var reader = new FileReader();
            var name = f.name;
            reader.onload = function(e) {
                if (typeof console !== 'undefined')
                    console.log("onload", new Date(), rABS, use_worker);
                var data = e.target.result;
                if (use_worker) {
                    xlsxworker(data, process_wb);
                } else {
                    var wb;
                    if (rABS) {
                        wb = XLSX.read(data, {type: 'binary'});
                    } else {
                        var arr = fixdata(data);
                        wb = XLSX.read(btoa(arr), {type: 'base64'});
                    }
                    process_wb(wb);
                }
            };
            if (rABS)
                reader.readAsBinaryString(f);
            else
                reader.readAsArrayBuffer(f);
        }
    }

    function handleDragover(e) {
        e.stopPropagation();
        e.preventDefault();
        e.dataTransfer.dropEffect = 'copy';
    }

    if (drop.addEventListener) {
        drop.addEventListener('dragenter', handleDragover, false);
        drop.addEventListener('dragover', handleDragover, false);
        drop.addEventListener('drop', handleDrop, false);
    }


    var xlf = document.getElementById('xlf');
    function handleFile(e) {
        rABS = document.getElementsByName("userabs")[0].checked;
        use_worker = document.getElementsByName("useworker")[0].checked;
        var files = e.target.files;
        var i, f;
        for (i = 0, f = files[i]; i != files.length; ++i) {
            var reader = new FileReader();
            var name = f.name;
            reader.onload = function(e) {
                if (typeof console !== 'undefined')
                    console.log("onload", new Date(), rABS, use_worker);
                var data = e.target.result;
                if (use_worker) {
                    xlsxworker(data, process_wb);
                } else {
                    var wb;
                    if (rABS) {
                        wb = XLSX.read(data, {type: 'binary'});
                    } else {
                        var arr = fixdata(data);
                        wb = XLSX.read(btoa(arr), {type: 'base64'});
                    }
                    process_wb(wb);
                }
            };
            if (rABS)
                reader.readAsBinaryString(f);
            else
                reader.readAsArrayBuffer(f);
        }
    }

    if (xlf.addEventListener)
        xlf.addEventListener('change', handleFile, false);
</script>



<!--<style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style></body></html>



<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-title">
                <h4>Advance <span class="semi-bold">Options</span></h4>
                <div class="tools"> <a href="javascript:;" class="collapse"></a>  <a href="javascript:;" class="reload"></a></div>
            </div>
            <div class="grid-body ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form id="add_employee_skill_form" name="add_file_type_form">
                            <div class="form-group">
                                <label class="form-label">File</label>
                                <span style="color: red">*</span>                       

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="upload_file_stuff_id" id="upload_file_stuff_id" class="select2 form-control" style="width: 30%" >
                                        <option value="">-- Select File --</option>
                                        <?php foreach ($file_types as $file_type) {
                                            ?> 
                                            <option value="<?php echo $file_type->upload_file_stuff_id; ?>"><?php echo $file_type->stuff_name; ?></option>
                                        <?php } ?>
                                    </select>                            
                                </div>
                            </div>

                            <div class="form-group">

                                <label class="form-label">Column</label>
                                <span style="color: red">*</span>

                                <div class="input-with-icon  right">                                       
                                    <i class=""></i>
                                    <select name="data_set_id" id="data_set_id" class="select2 form-control" style="width: 30%" >
                                        <option value="">-- Select Column --</option>
                                        <?php foreach ($data_sets as $data_set) {
                                            ?> 
                                            <option value="<?php echo $data_set->data_set_id; ?>"><?php echo $data_set->data_set_name; ?></option>
                                        <?php } ?>
                                    </select>   
                                </div>
                            </div>






                            <div id="add_file_type_msg" class="form-row"> </div>

                            <!--                            <div class="modal-footer">
                                                            <button class="btn btn-primary btn-cons" type="submit">
                                                                <i class="icon-ok"></i>
                                                                Save
                                                            </button>
                                                            <a href="<?php echo site_url(); ?>/file_type/file_type_controller/manage_upload_files_stuff" class="btn btn-white btn-cons" type="button">Cancel</a>
                                                        </div>-->
<!--
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

 <button type="button1" class="btn btn-primary btn-sm btn-small" id ="generate_graph">generate Graph</button> 
  
   
<!--<script src="http://d3js.org/d3.v3.min.js"></script>
<script>
function myFunction() {
    var diameter = 960,
    format = d3.format(",d"),
    color = d3.scale.category20c();

var bubble = d3.layout.pack()
    .sort(null)
    .size([diameter, diameter])
    .padding(1.5);

var svg = d3.select("body").append("svg")
    .attr("width", diameter)
    .attr("height", diameter)
    .attr("class", "bubble");

d3.json("to_json()", function(error, root) {
  var node = svg.selectAll(".node")
      .data(bubble.nodes(classes(root))
      .filter(function(d) { return !d.children; }))
    .enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

  node.append("title")
      .text(function(d) { return d.className + ": " + format(d.value); });

  node.append("circle")
      .attr("r", function(d) { return d.r; })
      .style("fill", function(d) { return color(d.packageName); });

  node.append("text")
      .attr("dy", ".3em")
      .style("text-anchor", "middle")
      .text(function(d) { return d.className.substring(0, d.r / 3); });
});

// Returns a flattened hierarchy containing all leaf nodes under the root.
function classes(root) {
  var classes = [];

  function recurse(name, node) {
    if (node.children) node.children.forEach(function(child) { recurse(node.name, child); });
    else classes.push({packageName: name, className: node.name, value: node.size});
  }

  recurse(null, root);
  return {children: classes};
}

d3.select(self.frameElement).style("height", diameter + "px");

}
    
</script>
-->




<script type="text/javascript">
    $('#select_data_type_parent_menu').addClass('active open');
</script>



