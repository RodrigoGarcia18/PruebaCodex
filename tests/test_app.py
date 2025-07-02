import os
import sys

sys.path.append(os.path.dirname(os.path.dirname(__file__)))

import tempfile

import app


def setup_module(module):
    fd, path = tempfile.mkstemp()
    os.close(fd)
    app.DB_NAME = path
    app.init_db()


def teardown_module(module):
    os.unlink(app.DB_NAME)


def test_index_route():
    app.app.testing = True
    client = app.app.test_client()
    response = client.get('/')
    assert response.status_code == 200
