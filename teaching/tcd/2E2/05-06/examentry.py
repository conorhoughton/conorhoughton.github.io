#!/usr/bin/env python

# The shebang above tells the UNIX shell to use the Python interpreter
# when the script is executable

import sys    # A standard module for command line, IO etc.

try:
    from TCDmath.markentry import MarkEntryRootFrame
    # Objects of the MarkEntryRootFrame class implement the GUI
except:
    try:
        sys.path.append('/u2/staff/stafinfo/2005Exams/PythonLibrary')
        # If appropriate, change the above directory to one that
        # contains the TCDmath python library
        from TCDmath.markentry import MarkEntryRootFrame
    except:
        sys.stderr.write("""Unable to find TCDmath python library.
If necessary, install the library in a suitable directory, and edit
this python script near the beginning to add that directory to the
search path.\n\n""")
        raise


def examMarkEntryEdit(xmlin=None, xmlout=None):

    if not xmlin:
        raise "No XML input file specified"

    if not xmlout:
        xmlout = xmlin

    # Extensions .html, .tex, are added to filebasename
    if xmlout[-4:] == '.xml':
        # Strip off .xml from XML output file, if present,
        # to get filebasename
        filebasename = xmlout[:-4]
    else:
        filebasename = xmlout

    # Establish the filenames for exported formats
    htmlout = filebasename + ".html"   # HTML export 
    texout  = filebasename + ".tex"    # LaTeX export
    txtout  = filebasename + ".txt"    # plain text
    tsvout  = filebasename + ".tsv"    # tab-separated value
    csvout  = filebasename + ".csv"    # comma-separated value

    # Extension .tsv problematic on Windows, apparently

    # Now create MarkEntryRootFrame object (not visible till displayed)
    merf=MarkEntryRootFrame(
            xmlin=xmlin, xmlout=xmlout, htmlout=htmlout,
            texout=texout, txtout=txtout, tsvout=tsvout, csvout=csvout )

    # Expose students three at a time.
    # Adjust to taste, but note that (especially for large classes)
    # the viewport scrolls more easily with a shallow viewport.
    merf.viewport_depth = 5
    merf.viewport_width = 12

    # Specify the acceptable non-numeric returns
    merf.valid_strings = ['ABS','MC']

    merf.display()

    # End of examMarkEntry function

if __name__ == '__main__':
    # Boiler plate, code below not called unless this is the main module

    xmlin = sys.argv[1]

    if len(sys.argv) > 2:
        xmlout = sys.argv[2]
    else:
        xmlout = xmlin

    # Now call the examMarkEntry function with the arguments specified
    # via the command line
    examMarkEntryEdit(xmlin=xmlin, xmlout=xmlout)

