<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Shipping Tools</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-sm-12 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Manage Orders</h4>
                                                            <P class="card-subtitle card-subtitle-dash">Shift + Scroll for details item</P>
                                                        </div>
                                                        <div>
                                                            <!-- Modal Edit-->
                                                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div id="detailOrder" class="detailOrder">
                                                                                <div class="section-title">
                                                                                    <h2 id="statusIdResi">Edit Status</h2>
                                                                                </div>
                                                                                <div class="detail">
                                                                                    <h4 class="text-center fw-bold"></h4>
                                                                                    <ul>
                                                                                        <li>
                                                                                            <div class="table-responsive mt-1">
                                                                                                <table class="table select-table">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>Package Name</th>
                                                                                                            <th>Sender</th>
                                                                                                            <th>Receipent</th>
                                                                                                            <th>Origin City</th>
                                                                                                            <th>Destination City</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody id="tableChangeStatus">
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </li>
                                                                                        <li data-aos="fade-up">
                                                                                            <i class='bx bx-send icon-help'></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#detail-1">Change Status<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                                                                            <div id="detail-1" class="collapse show">
                                                                                                <div class="card card-order">
                                                                                                    <div class="card-body">
                                                                                                        <div class="form-sample">
                                                                                                            <p class="card-description">
                                                                                                                Change Status
                                                                                                            </p>
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-12">
                                                                                                                    <div class="form-group row select2ParentEdit">
                                                                                                                        <label class="col-sm-3 col-form-label">Status</label>
                                                                                                                        <div class="col-sm-9 form-input">
                                                                                                                            <select class="w-100 form-control select2Edit" name="status_edit">
                                                                                                                                <option value="On Process">On Process</option>
                                                                                                                                <option value="On Delivery">On Delivery</option>
                                                                                                                                <option value="Delivered">Delivered</option>
                                                                                                                                <option value="Canceled">Canceled</option>
                                                                                                                            </select>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btninverse-secondary" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-inverse-primary" id="editButtonModal">Save Changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="notfound"></div>
                                                    <div class="table-responsive mt-1">
                                                        <table class="table select-table text-center" id="tableData">
                                                            <thead>
                                                                <tr>
                                                                    <th>Shipping Id</th>
                                                                    <th>Resi Number</th>
                                                                    <th>Package</th>
                                                                    <th>Sender</th>
                                                                    <th>Receipent</th>
                                                                    <th>Total Fee</th>
                                                                    <th>Status</th>
                                                                    <th>Note</th>
                                                                    <th>Order Date</th>
                                                                    <th>Receive Date</th>
                                                                    <th>Admin</th>
                                                                    <th>Kurir</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="tableDataTable">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>

<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
    getData();
    const shippingCost = $(".shipping-cost");
    const insurance = $(".insurance");
    const qty = $(".qty");
    const bjmoney = $(".bjmoney");
    const yfmoney = $(".yfmoney");
    const zmoney = $(".zmoney");

    for (let i = 0; i < shippingCost.length; i++) {
        shippingCost[i].addEventListener("keyup", function(e) {
            yfmoney[i].innerHTML = rupiah(this.value, "Rp. ");
            zmoney[i].innerHTML = rupiah(
                (parseInt(shippingCost[i].value) + parseInt(insurance[i].value)) *
                qty[i].value
            );
        });
    }
    for (let i = 0; i < insurance.length; i++) {
        insurance[i].addEventListener("keyup", function(e) {
            bjmoney[i].innerHTML = rupiah(this.value, "Rp. ");
            zmoney[i].innerHTML = rupiah(
                (parseInt(shippingCost[i].value) + parseInt(insurance[i].value)) *
                qty[i].value
            );
        });
    }

    for (let i = 0; i < qty.length; i++) {
        qty[i].addEventListener("keyup", function(e) {
            zmoney[i].innerHTML = rupiah(
                (parseInt(shippingCost[i].value) + parseInt(insurance[i].value)) *
                qty[i].value
            );
        });
    }

    function getData() {
        const base_url = window.location.pathname;
        $.ajax({
            url: `${base_url}/getData`,
            type: "GET",
            dataType: "json",
            success: function(response) {
                let i;
                let html = "";
                for (i = 0; i < response.length; i++) {
                    if (response[i].tgl_diterima == null) {
                        response[i].tgl_diterima = "";
                    }
                    if (response[i].keterangan == " ") {
                        response[i].keterangan = "Tidak ada";
                    }
                    if (
                        response[i].status == "On Process" ||
                        response[i].status == "On Delivery"
                    ) {
                        status = "warning";
                    }
                    if (response[i].status == "Delivered") {
                        status = "success";
                    }
                    if (response[i].status == "Canceled") {
                        status = "danger";
                    }
                    let biaya_pengiriman = rupiah(response[i].biaya_pengiriman);
                    let asuransi = rupiah(response[i].asuransi);
                    let total = rupiah(response[i].total_harga);
                    html += `<tr>
					<td>
						${response[i].id_pengiriman}
					</td>
					<td>
					<strong>${response[i].no_resi}</strong>
					</td>
                    <td>
					<p class="text-start"><strong>${response[i].nama_barang}</strong></p>
                    <p class="text-start">Type Item : ${response[i].jenis_paket}</p>
                    <p class="text-start">Weight : ${response[i].berat} Kg</p>
                    <p class="text-start">Qty : ${response[i].qty}</p>
					</td>
                    <td>
					<p class="text-start"><strong>${response[i].nama_pengirim}</strong></p>
                    <p class="text-start">${response[i].alamat_pengirim}</p>
                    <p class="text-start">${response[i].kode_pos_pengirim}</p>
                    <p class="text-start">${response[i].asal}</p>
                    <p class="text-start">Telp  : ${response[i].telp_pengirim}</p>
					</td>
                    <td>
					<p class="text-start"><strong>${response[i].nama_penerima}</strong></p>
                    <p class="text-start">${response[i].alamat_penerima}</p>
                    <p class="text-start">${response[i].kode_pos_penerima}</p>
                    <p class="text-start">${response[i].tujuan}</p>
                    <p class="text-start">Telp  : ${response[i].telp_penerima}</p>
					</td>
                    <td>
                    <p class="text-start">Shipping Cost : ${biaya_pengiriman}</p>
                    <p class="text-start">Insurance : ${asuransi}</p>
                    <p class="text-start">---------------------------------- x ${response[i].qty} qty</p>
                    <p class="text-start"><strong>${total}</strong></p>
					</td>
                    <td>
					<div class="badge badge-${status}">${response[i].status}</div>
					</td>
                    <td>
					${response[i].keterangan}
					</td>
                    <td>
					${response[i].tgl_order}
					</td>
                     <td>
					${response[i].tgl_diterima}
					</td>
                    <td>
					${response[i].username}
					</td>
                    <td>
					${response[i].kurir}
					</td>
                    <td><button type="button" class="btn btn-inverse-warning btn-edit" data-id="${response[i].id_pengiriman}">Edit</button>
				</tr>`;
                }
                $('#tableData').DataTable().destroy();
                $("#tableDataTable").html(html);
                let table = $('#tableData').DataTable({
                    "columnDefs": [{
                        "className": "dt-center",
                        "targets": "_all"
                    }],
                });
            },
        });
    }
    let edit = [0];
    $("#tableData").on("click", ".btn-edit", function() {
        const base_url = window.location.pathname;
        let id = $(this).attr("data-id");
        $.ajax({
            url: `${base_url}/getDataId`,
            type: "POST",
            data: {
                id: id,
            },
            dataType: "json",
            success: function(response) {
                edit[0] = response[0];
                $("#statusIdResi").html(`Edit Status
                <p>${response[0].no_resi}</p>`)
                $("select[name=status_edit]")
                    .val(response[0].status)
                    .trigger("change");
                let html;
                html = `<td>
					<p class="text-start"><strong>${response[0].nama_barang}</strong></p>
                    <p class="text-start">Type Item : ${response[0].jenis_paket}</p>
                    <p class="text-start">Weight : ${response[0].berat} Kg</p>
                    <p class="text-start">Qty : ${response[0].qty}</p>
					</td>
                    <td>
					<p class="text-start"><strong>${response[0].nama_pengirim}</strong></p>
                    <p class="text-start">${response[0].alamat_pengirim}</p>
                    <p class="text-start">${response[0].kode_pos_pengirim}</p>
                    <p class="text-start">Telp  : ${response[0].telp_pengirim}</p>
					</td>
                    <td>
					<p class="text-start"><strong>${response[0].nama_penerima}</strong></p>
                    <p class="text-start">${response[0].alamat_penerima}</p>
                    <p class="text-start">${response[0].kode_pos_penerima}</p>
                    <p class="text-start">Telp  : ${response[0].telp_penerima}</p>
					</td>
                    <td>
                    <p class="text-start">${response[0].asal}</p>
					</td>
                    <td>
                    <p class="text-start">${response[0].tujuan}</p>
					</td>`;
                $("#tableChangeStatus").html(html);
                $("#editModal").modal("show");
            },
        });
    });
    $("#editButtonModal").on("click", function() {
        const base_url = window.location.pathname;
        let id_pengiriman = edit[0].id_pengiriman;
        let status = $("select[name=status_edit]").val();
        $.ajax({
            url: `${base_url}/updateData`,
            type: "POST",
            data: {
                id_pengiriman: id_pengiriman,
                status: status,
            },
            success: function(response) {
                $("select[name=status_edit]").val("");
                $("#editModal").modal("hide");
                getData();
            },
        });
    });
</script>