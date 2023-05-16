<!DOCTYPE html>
<html lang="en">

<?php include_once("../partials/head1.php");?>

<body>
    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">
            <div class="content">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header header-elements-inline bg-info-600">
                                <h6 class="card-title">Token</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="alpaca-token"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let lang = {}
        lang.en = {
            "title": "Alpaca Practice Form:",
            "buttonLabel": "View Json",
            "token": "Token :",
        }
        lang.bn = {
            "title": "আলপাকা অনুশীলন ফর্ম:",
            "buttonLabel": "জেসন দেখুন",
            "token": "টোকেন :",
        }
        let activeLang = lang.bn

        $('#alpaca-token').alpaca({
            schema: {
                "title": activeLang.token,
                "type": "string"
            },
            options: {
                "type": "token",
                "tokenfield": {
                    "autocomplete": {
                        "source": ["marty", "doc", "george", "biff", "lorraine", "mr. strickland"],
                        "delay": 100
                    },
                    "showAutocompleteOnFocus": true
                }
            },
        });
    </script>
</body>