@section('title')
    <title>Old World - Vergecraft</title>
@stop

@section('header')
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Old World</h1>
        <p class="lead">Download a copy of the old world for yourself</p>
    </div>
</header>
@stop

@section('content')
<div class="content">
    <div class="container">
        <section>
            <h2>Download instructions</h2>
            <div class="row-fluid">
                <div class="span12">
                <p>Using a download manager/tool with support for resuming partial downloads is recommended, because is it possible that the download gets interrupted. Such tools exist for all platforms or browsers and can be found online.
                If you are familiar with the command line, the cross-platform <code>wget</code> utility can be used with the <code>-c</code> flag.</p>
                <p>Use <a href="http://www.7-zip.org/">7-zip</a> or another compatible file extraction utility that supports the 7z file format to unpack after downloading. If you suspect your download is corrupt, you may check the MD5/SHA1 file hashes using a file hash checker application.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="row-fluid">
                <div class="span6">
                    <h2>Vergecraft 1 map</h2>
                    <p>
                        <a class="btn btn-primary" href="http://www.inimicus.com/downloads/vergecraft/world4.7z">
                            <strong><i class="icon-download icon-white"></i> Click to download</strong>
                        </a>
                    </p>
                    <p>Filesize: ~4.51 GB (4,845,617,648 bytes)</p>
                    <p>md5: <code>7d2180d40e8963b61053aa83df24c866</code><br />
                    sha1: <code>3b6ee55155afe65190c29eef6a5227157cd86d9b</code></p>
                </div>
                <div class="span6">
                    <h2>Vergecraft 2 map</h2>
                    <p>
                        <a class="btn btn-primary" href="http://www.inimicus.com/downloads/vergecraft/vcv2/vcv2.7z.001">
                            <strong><i class="icon-download icon-white"></i> Part 1</strong>
                        </a>

                        <a class="btn btn-primary" href="http://www.inimicus.com/downloads/vergecraft/vcv2/vcv2.7z.002">
                            <strong><i class="icon-download icon-white"></i> Part 2</strong>
                        </a>

                        <a class="btn btn-primary" href="http://www.inimicus.com/downloads/vergecraft/vcv2/vcv2.7z.003">
                            <strong><i class="icon-download icon-white"></i> Part 3</strong>
                        </a>

                        <a class="btn btn-primary" href="http://www.inimicus.com/downloads/vergecraft/vcv2/vcv2.7z.004">
                            <strong><i class="icon-download icon-white"></i> Part 4</strong>
                        </a>
                    </p>
                    <p>Filesize: ~5.86 GB total (6,294,133,217 bytes)</p>
                    <p>The download is split into 4 1.5 GB files to facilitate downloading in case of interrupted downloads. Download <strong>all parts</strong> into the same folder, and <strong>open the first one</strong> with 7-zip.</p>
                    <p>md5 part 1: <code>7d70f098135612a48536eefca0e949b8</code><br />
                    md5 part 2: <code>f46facc7e171cab34a95c75d49601075</code><br />
                    md5 part 3: <code>ae19d423f79bef0f6a100eb2f559cc17</code><br />
                    md5 part 4: <code>de0d79095bcc78c70eeea274751ffd78</code></p>
                </div>

            </div>
        </section>
    </div>
</div>
@stop
